<?php
return array(
    'core_layout' => array(
        'frontend' => array(
            'layout' => 'layout/2columns-right.phtml',
            'children_views' => array(
                'col_right' => 'playground-design/common/column_right.phtml',
                'col_left' => 'playground-user/user/col-user.phtml'
            ),
            'channel' => array(
                'embed' => array(
                    'layout' => 'layout/1column-embed.phtml',
                ),
            ),
            'modules' => array(
                'playgroundcms' => array(
                    'controllers' => array(
                        'playgroundcms' => array(
                            'actions' => array(
                                'index' => array(
                                    'children_views' => array(
                                        'col_left' => 'playground-user/user/col-user.phtml'
                                    )
                                )
                            )
                        )
                    )
                ),

                'playgroundfacebook' => array(
                    'layout' => 'layout/2columns-left',
                    'children_views' => array(
                        'col_left' => 'playground-user/user/col-user.phtml'
                    )
                ),

                'playgroundfaq' => array(
                    'layout' => 'layout/2columns-left',
                    'children_views' => array(
                        'col_left' => 'playground-user/user/col-user.phtml'
                    )
                ),

                'playgroundflow' => array(
                    'layout' => 'layout/1column.phtml'
                ),

                'playgroundgame' => array(
                    'channel' => array(
                        'embed' => array(
                            'layout' => 'layout/1column-embed.phtml'
                        )
                    ),
                    'controllers' => array(
                        'playgroundgame_lottery' => array(
                            'children_views' => array(
                                'col_right' => 'playground-game/lottery/col-lottery.phtml'
                            )
                        ),
                        'playgroundgame_quiz' => array(
                            'children_views' => array(
                                'col_right' => 'playground-game/quiz/col-quiz.phtml'
                            )
                        ),
                        'playgroundgame_instantwin' => array(
                            'children_views' => array(
                                'col_right' => 'playground-game/instant-win/col-instantwin.phtml'
                            )
                        ),
                        'playgroundgame_postvote' => array(
                            'children_views' => array(
                                'col_right' => 'playground-game/post-vote/col-postvote.phtml'
                            )
                        ),
                        
                        'playgroundgame_prizecategory' => array(
                            'actions' => array(
                                'index' => array(
                                    'children_views' => array(
                                        'col_right' => 'playground-design/common/column_right.phtml'
                                    )
                                )
                            )
                        ),
                        'playgroundgame' => array(
                            'children_views' => array(
                                'col_right' => 'playground-game/quiz/col-quiz.phtml.phtml'
                            ),
                            'actions' => array(
                                'index' => array(
                                    'layout' => 'layout/2columns-right.phtml'
                                )
                            )
                        )
                    )
                ),

                'playgroundpartnership' => array(
                    'layout' => 'layout/2columns-left.phtml'
                ),

                'playgrounduser' => array(
                    'layout' => 'layout/2columns-left.phtml',
                    'controllers' => array(
                        'playgrounduser_user' => array(
                            'children_views' => array(
                                'col_left' => 'playground-user/user/col-user.phtml'
                            ),
                            'actions' => array(
                                'index' => array(
                                    'layout' => 'layout/1column.phtml'
                                ),
                                'register' => array(
                                    'layout' => 'layout/1column.phtml'
                                ),
                                'registermail' => array(
                                    'layout' => 'layout/1column.phtml'
                                ),
                                'address' => array(
                                    'layout' => 'layout/2columns-right.phtml'
                                )
                            )
                        ),
                        'playgrounduser_forgot' => array(
                            'layout' => 'layout/1column.phtml'
                        )
                    )
                ),
            )
        )
    )
);