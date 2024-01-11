<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use MongoDB\Laravel\Eloquent\Model;
use MongoDB\Laravel\Relations\EmbedsOne;
use MongoDB\Model\BSONArray;
use MongoDB\Model\BSONDocument;

class Country extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'countries';

    public function flag()
    {
        return $this->embedsOne(Flag::class);
    }

    public function circulation(): EmbedsOne
    {
        return $this->embedsOne(Circulation::class);
    }

    public function plate()
    {
        return $this->circulation->plate();
    }

    public function langs()
    {
        return $this->embedsMany(Language::class);
    }

    public function languages()
    {

        $result = DB::collection('countries')->raw(function ($collection) {
            return $collection->aggregate([
                [
                    '$lookup' => [
                        'from' => 'languages',
                        'localField' => 'languages_ids',
                        'foreignField' => '_id',
                        'let' => [
                            'name' => $this->name
                        ],
                        'pipeline' => [],
                        'as' => 'langs'
                    ]
                ]
            ]);
        });

        $out = [];

        function toArray(&$object)
        {
            if (is_object($object) && in_array(get_class($object), [BSONDocument::class, BSONArray::class])) {
                $object = $object->getArrayCopy();
            }
            if (is_array($object)) {
                foreach ($object as &$item) {
                    toArray($item);
                }
            }
            return $object;
        }

        foreach ($result as $document) {
            $out[] = toArray($document);
        }

        $test = self::hydrate($out)[0];

        return $test->langs;
    }
}