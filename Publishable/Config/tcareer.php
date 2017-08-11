<?php

return [
    /*
     |--------------------------------------------------------------------------
     | Musoni Website Views
     |--------------------------------------------------------------------------
     | The website has pre-defined view, their customization can be handled here
     |
     |
     */
    'namespace'=>'\\Tyondo\\Career\\Models\\',
    'views' => [
        'layouts' => [
            'master'        => 'tyondoCareer::layouts.admin',
        ],
        'partials' => [
            'menu' => 'tyondoCareer::partials.front-end.main-menu',
            'footer' => 'tyondoCareer::partials.front-end.main-footer',
            'top' => 'tyondoCareer::partials.front-end.top-bar',
            '2action' => 'tyondoCareer::partials.front-end.call-out',
            'news' => [
                'index' => 'tyondoCareer::partials.front-end.news.index',
                'loop' => 'tyondoCareer::partials.front-end.news.news-loop',
            ],
            'products' => [
                'sidebar' => 'tyondoCareer::partials.front-end.products.sidebar',
            ]
        ],
        'back-end' => [
            'team' => [
                'index'     => 'tyondoCareer::back-end.team.index',
                'create'    => 'tyondoCareer::back-end.team.create',
                'show'      => 'tyondoCareer::back-end.team.show',
                'edit'      => 'tyondoCareer::back-end.team.edit',
                'role'      => 'tyondoCareer::back-end.team.role',
            ],
            'faq' => [
                'index'     => 'tyondoCareer::back-end.faq.index',
                'create'    => 'tyondoCareer::back-end.faq.create',
                'show'      => 'tyondoCareer::back-end.faq.show',
                'edit'      => 'tyondoCareer::back-end.faq.edit',
                'role'      => 'tyondoCareer::back-end.faq.role',
            ],
            'products' => [
                'index'     => 'tyondoCareer::back-end.products.index',
                'create'    => 'tyondoCareer::back-end.products.create',
                'show'      => 'tyondoCareer::back-end.products.show',
                'edit'      => 'tyondoCareer::back-end.products.edit',
                'role'      => 'tyondoCareer::back-end.products.role',
            ],
            'testimonials' => [
                'index'     => 'tyondoCareer::back-end.testimonials.index',
                'create'    => 'tyondoCareer::back-end.testimonials.create',
                'show'      => 'tyondoCareer::back-end.testimonials.show',
                'edit'      => 'tyondoCareer::back-end.testimonials.edit',
                'role'      => 'tyondoCareer::back-end.testimonials.role',
            ],
        ],
        'front-end' => [
            'about' =>  [
                'faq' => 'tyondoCareer::front-end.about.about-faq',
                'team' => 'tyondoCareer::front-end.about.about-team',
                'testimonials' => 'tyondoCareer::front-end.about.about-testimonials',
                'about' => 'tyondoCareer::front-end.about.about-us',
                'index' => 'tyondoCareer::front-end.about.index'
            ],
            'contact'   =>  [
                'contact' => 'tyondoCareer::front-end.contact.contact-us',
                'account' => 'tyondoCareer::front-end.contact.',
            ],
            'home'  =>  [
                'index' =>  'tyondoCareer::front-end.home.index'
            ],
            'loan'  =>  [
                'form'   =>  'tyondoCareer::front-end.loan.form'
            ],
            'news'  =>  [
                'list' =>  'tyondoCareer::front-end.news.news-grid'
            ],
            'products'  =>  [
                'products' => 'tyondoCareer::front-end.products.products',
                'agriBusiness' => 'tyondoCareer::front-end.products.agri-business-loans',
                'assetFinance' => 'tyondoCareer::front-end.products.asset-finance-loans',
                'education' => 'tyondoCareer::front-end.products.education-loans',
                'emergency' => 'tyondoCareer::front-end.products.emergency-loans',
                'groupBusiness' => 'tyondoCareer::front-end.products.group-business-loans',
                'individualBusiness' => 'tyondoCareer::front-end.products.individual-business-loans',
            ],
            'projects'
        ],


        'shared'=>[
            'google-analytics' => 'mnara::admin.shared.GoogleAnalytics'
        ]
    ],
    /*
    |--------------------------------------------------------------------------
    | Musoni Package Navigation Menu
    |--------------------------------------------------------------------------
    |
    |
    */
    'navigation' => [

        [
            'group' => 'Team',
            'class' => 'fa fa-book fa-lg',
            'links' => [
                [
                    'title' => 'Add Team',
                    'class' => 'fa fa-fw fa-plus',
                    'route' => 'musoni.team.create'
                ],
                [
                    'title' => 'Manage Team',
                    'class' => 'fa fa-newspaper-o',
                    'route' => 'musoni.team.index'
                ],
                [
                    'title' => 'List Team',
                    'class' => 'fa fa-fw fa-th-list',
                    'route' => 'musoni.team.index'
                ],
            ]
        ],

        [
            'group' => 'FAQ',
            'class' => 'fa fa-cubes fa-lg',
            'links' => [
                [
                    'title' => 'Add Faq',
                    'class' => 'fa fa-fw fa-plus',
                    'route' => 'musoni.faq.create'
                ],
                [
                    'title' => 'List Faq',
                    'class' => 'fa fa-fw fa-th-list',
                    'route' => 'musoni.faq.index'
                ],

            ]
        ],

        [
            'group' => 'Testimonials',
            'class' => 'fa fa-cubes fa-lg',
            'links' => [
                [
                    'title' => 'Add Category',
                    'class' => 'fa fa-fw fa-plus',
                    'route' => 'musoni.testimonial.create'
                ],
                [
                    'title' => 'List Category',
                    'class' => 'fa fa-fw fa-th-list',
                    'route' => 'musoni.testimonial.index'
                ],

            ]
        ],
        [
            'group' => 'Products',
            'class' => 'fa fa-cubes fa-lg',
            'links' => [
                [
                    'title' => 'Add Product',
                    'class' => 'fa fa-fw fa-plus',
                    'route' => 'musoni.product.create'
                ],
                [
                    'title' => 'List Products',
                    'class' => 'fa fa-fw fa-th-list',
                    'route' => 'musoni.product.index.list'
                ],

            ]

        ],
    ],
];