<?php
return [

    // Custom  palettes, fixed options [label, default (boolean), colour (array(colour, customOptions)) ]
    'palettes' => [
        'Tailwind' => [  // custom label (required)
            [
                'label'   => 'Red', // custom label (required)
                'default' => false,  // default could be true/false (option is required)
                'color'   =>  [
                    [
                        'color'             => '#ef4444',               // the colour shown in the fieldtype (required)
                        'background'        => 'bg-red-500',            // optional / custom attribute
                        'backgroundHover'   => 'hover:bg-red-700',      // optional / custom attribute
                        'text'              => 'text-white',            // optional / custom attribute
                        'textHover'         => 'hover:text-zinc-200'    // optional / custom attribute
                    ]
                ]
            ],
            [
                'label'   => 'Amber',
                'default' => true,
                'color'   =>  [
                    [
                        'color'             => '#f59e0b',               
                        'background'        => 'bg-amber-500',
                        'backgroundHover'   => 'hover:bg-amber-700',
                        'text'              => 'text-white',
                        'textHover'         => 'hover:text-zinc-200'
                    ]
                ]
            ],
            [
                'label'   => 'Green',
                'default' => false,
                'color'   =>  [
                    [
                        'color'             => '#22c55e',              
                        'background'        => 'bg-green-500',
                        'backgroundHover'   => 'hover:bg-green-700',
                        'text'              => 'text-white',
                        'textHover'         => 'hover:text-zinc-200'
                    ]
                ]
            ],
            [
                'label'   => 'Blue',
                'default' => false,
                'color'   =>  [
                    [
                        'color'             => '#3b82f6',              
                        'background'        => 'bg-blue-500',
                        'backgroundHover'   => 'hover:bg-blue-700',
                        'text'              => 'text-white',
                        'textHover'         => 'hover:text-zinc-200'
                    ]
                ]
            ],
            [
                'label'   => 'Purple',
                'default' => false,
                'color'   =>  [
                    [
                        'color'             => '#a855f7',              
                        'background'        => 'bg-purple-500',
                        'backgroundHover'   => 'hover:bg-purple-700',
                        'text'              => 'text-white',
                        'textHover'         => 'hover:text-zinc-200'
                    ]
                ]
            ],
            [
                'label'   => 'Yellow/Emerald',
                'default' => false,
                'color'   =>  [
                    [
                        'color'             => '#eab308',              
                        'background'        => 'bg-yellow-500',
                        'backgroundHover'   => 'hover:bg-yellow-700',
                        'text'              => 'text-white',
                        'textHover'         => 'hover:text-zinc-200'
                    ],
                    [
                        'color'             => '#059669',               
                        'background'        => 'bg-emerald-600',
                        'backgroundHover'   => 'hover:bg-emerald-800',
                        'text'              => 'text-white',
                        'textHover'         => 'hover:text-zinc-200'
                    ]
                ]
            ],
            [
                'label'   => 'Red/Amber',
                'default' => false,
                'color'   =>  [
                    [
                        'color'             => '#a855f7',              
                        'background'        => 'bg-red-500',
                        'backgroundHover'   => 'hover:bg-red-700',
                        'text'              => 'text-white',
                        'textHover'         => 'hover:text-zinc-200'
                    ],
                    [
                        'color'             => '#f59e0b',               
                        'background'        => 'bg-amber-500',
                        'backgroundHover'   => 'hover:bg-amber-700',
                        'text'              => 'text-white',
                        'textHover'         => 'hover:text-zinc-200'
                    ]
                ]
            ],
            [
                'label'   => 'Sky/Rose',
                'default' => false,
                'color'   =>  [
                    [
                        'color'             => '#0ea5e9',               
                        'background'        => 'bg-sky-500',
                        'backgroundHover'   => 'hover:bg-sky-700',
                        'text'              => 'text-white',
                        'textHover'         => 'hover:text-zinc-200'
                    ],
                    [
                        'color'             => '#e11d48',               
                        'background'        => 'bg-rose-600',
                        'backgroundHover'   => 'hover:bg-rose-800',
                        'text'              => 'text-white',
                        'textHover'         => 'hover:text-zinc-200'
                    ]
                ]
            ],
        ]
    ]

];