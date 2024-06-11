<?php
use craft\elements\Entry;
use percipiolondon\typesense\TypesenseCollectionIndex;

$BLOG_INDEX = 'playground_blog';

$request = Craft::$app->getRequest();
if ($request->getIsCpRequest() || $request->getIsConsoleRequest()) {
    return [
        'collections' => [
            // blog
            TypesenseCollectionIndex::create(
                [
                    'name' => $BLOG_INDEX,
                    'section' => 'blog.blog',
                    'fields' => [
                        [
                            'name' => 'id',
                            'type' => 'string',
                        ],
                        [
                            'name' => 'url',
                            'type' => 'string',
                        ],
                        [
                            'name' => 'title',
                            'type' => 'string',
                            'sort' => true,
                        ],
                    ],
                    'default_sorting_field' => 'post_date_timestamp',
                    'resolver' => static function (Entry $entry) {

                        return [
                            'id' => (string) $entry->id . $entry->getSite()->language,
                            'url' => $entry->url,
                            'title' => htmlspecialchars_decode($entry->title),
                        ];
                    }
                ]
            )
                ->elementType(Entry::class)
                ->criteria(function () {
                    return Entry::find()->site('*')->section('blog');
                }),
            
        ],
    ];
}

return [
    'collections' => []
];