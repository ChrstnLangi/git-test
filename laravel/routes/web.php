<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    $hireds = [
        [
        "name" => "Dents.Talk",
        "image" => "Assets/13_20220719_015826_0012.png"
        ],
        [
        "name" => "PDGI",
        "image" => "Assets/8_20220719_015826_0007.png"
        ]
    ];

    $joins = [
        [
            "judul" => "Lorem ipsum",
            "deskripsi" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas minus facilis corrupti voluptate necessitatibus dicta eum esse nemo laudantium sit quae fuga est, alias aliquam numquam quia ullam neque tempore!.",
            "img" => ""
        ],
        [
            "judul" => "Dolor sit",
            "deskripsi" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas minus facilis corrupti voluptate necessitatibus dicta eum esse nemo laudantium sit quae fuga est, alias aliquam numquam quia ullam neque tempore!.",
            "img" => ""
        ],
        [
            "judul" => "Amet consectetur",
            "deskripsi" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas minus facilis corrupti voluptate necessitatibus dicta eum esse nemo laudantium sit quae fuga est, alias aliquam numquam quia ullam neque tempore!.",
            "img" => ""
        ],
        [
            "judul" => "Adipisicing elit",
            "deskripsi" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas minus facilis corrupti voluptate necessitatibus dicta eum esse nemo laudantium sit quae fuga est, alias aliquam numquam quia ullam neque tempore!.",
            "img" => ""
        ],
        [
            "judul" => "Quas minus",
            "deskripsi" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas minus facilis corrupti voluptate necessitatibus dicta eum esse nemo laudantium sit quae fuga est, alias aliquam numquam quia ullam neque tempore!.",
            "img" => ""
        ]
        ];

    $programs = [
            [
                "judul" => "DentsLearn Hands On",
                "deskripsi" => "Merupakan suatu program yang dapat meningkatkan skill keterampilan dokter gigi dalam melakukan tindakan praktik dengan pemberian materi serta praktik langsung yang dibimbing oleh pemateri yang memiliki kompetensi.",
                "img" => "Assets/4_20220719_015826_0003.png",
                "link" => "program_1",
                "mini_link" =>"mini_program_1"
            ],
            [
                "judul" => "DentsLearn Webinar",
                "deskripsi" => "Merupakan seminar mengenai topik kedokteran gigi yang mendatangkan pemateri berkompeten di bidangnya serta bekerja sama dengan PDGI maupun organisasi terkait",
                "img" => "Assets/5_20220719_015826_0004.png",
                "link" => "program_2",
                "mini_link" =>"mini_program_2"
            ],
            [
                "judul" => "DentsPractice",
                "deskripsi" => "Merupakan suatu program yang menyediakan fasilitas bagi mahasiswa kedokteran gigi untuk dapat melakukan skill lab di rumah masing-masing yang dikemas dalam materi yang mudah dipahami",
                "img" => "Assets/6_20220719_015826_0005.png",
                "link" => "program_3",
                "mini_link" =>"mini_program_3"
            ]
            ];

    $help = [
            [
                "judul" => "Lorem ipsum",
                "deskripsi" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas minus facilis corrupti voluptate necessitatibus dicta eum esse nemo laudantium sit quae fuga est, alias aliquam numquam quia ullam neque tempore!.",
                "img" => "Assets/dummy_1.png"
            ],
            [
                "judul" => "Lorem ipsum",
                "deskripsi" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas minus facilis corrupti voluptate necessitatibus dicta eum esse nemo laudantium sit quae fuga est, alias aliquam numquam quia ullam neque tempore!.",
                "img" => "Assets/dummy_2.jpg"
            ],
            [
                "judul" => "Lorem ipsum",
                "deskripsi" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas minus facilis corrupti voluptate necessitatibus dicta eum esse nemo laudantium sit quae fuga est, alias aliquam numquam quia ullam neque tempore!.",
                "img" => "Assets/dummy_3.jpg"
            ],
            [
                "judul" => "Lorem ipsum",
                "deskripsi" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas minus facilis corrupti voluptate necessitatibus dicta eum esse nemo laudantium sit quae fuga est, alias aliquam numquam quia ullam neque tempore!.",
                "img" => "Assets/dummy_4.png"
            ]
            ];
    $reviews_1 = [
        [
            "judul" => "Lorem ipsum",
            "deskripsi" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas minus facilis corrupti voluptate necessitatibus dicta eum esse nemo laudantium sit quae fuga est, alias aliquam numquam quia ullam neque tempore!.",
            "img" => "Assets/dummy_1.png",
            "role" => "I",
            "link" => "Lorem_ipsum_I"
        ],
        [
            "judul" => "Lorem ipsum",
            "deskripsi" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas minus facilis corrupti voluptate necessitatibus dicta eum esse nemo laudantium sit quae fuga est, alias aliquam numquam quia ullam neque tempore!.",
            "img" => "Assets/dummy_2.jpg",
            "role" => "II",
            "link" => "Lorem_ipsum_II"
        ],
        [
            "judul" => "Lorem ipsum",
            "deskripsi" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas minus facilis corrupti voluptate necessitatibus dicta eum esse nemo laudantium sit quae fuga est, alias aliquam numquam quia ullam neque tempore!.",
            "img" => "Assets/dummy_3.jpg",
            "role" => "III",
            "link" => "Lorem_ipsum_III"
        ],
        [
            "judul" => "Lorem ipsum",
            "deskripsi" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas minus facilis corrupti voluptate necessitatibus dicta eum esse nemo laudantium sit quae fuga est, alias aliquam numquam quia ullam neque tempore!.",
            "img" => "Assets/dummy_4.png",
            "role" => "IV",
            "link" => "Lorem_ipsum_IV"
        ]
        ];
    $reviews_2 = [
        [
                "judul" => "Lorem ipsum",
                "deskripsi" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas minus facilis corrupti voluptate necessitatibus dicta eum esse nemo laudantium sit quae fuga est, alias aliquam numquam quia ullam neque tempore!.",
                "img" => "Assets/dummy_4.png",
                "role" => "IV",
                "link" => "Lorem_ipsum_IV"
        ],
        [
                "judul" => "Lorem ipsum",
                "deskripsi" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas minus facilis corrupti voluptate necessitatibus dicta eum esse nemo laudantium sit quae fuga est, alias aliquam numquam quia ullam neque tempore!.",
                "img" => "Assets/dummy_3.jpg",
                "role" => "III",
                "link" => "Lorem_ipsum_III"
        ],
        [
                "judul" => "Lorem ipsum",
                "deskripsi" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas minus facilis corrupti voluptate necessitatibus dicta eum esse nemo laudantium sit quae fuga est, alias aliquam numquam quia ullam neque tempore!.",
                "img" => "Assets/dummy_2.jpg",
                "role" => "II",
                "link" => "Lorem_ipsum_II"
        ],
        [
                "judul" => "Lorem ipsum",
                "deskripsi" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas minus facilis corrupti voluptate necessitatibus dicta eum esse nemo laudantium sit quae fuga est, alias aliquam numquam quia ullam neque tempore!.",
                "img" => "Assets/dummy_1.png",
                "role" => "I",
                "link" => "Lorem_ipsum_I"
        ]
        ];

    $options = [
        [
                "judul" => "Lorem ipsum",
                "deskripsi" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas minus facilis corrupti voluptate necessitatibus dicta eum esse nemo laudantium sit quae fuga est, alias aliquam numquam quia ullam neque tempore!.",
                "img" => "Assets/dummy_1.png",
                "note" => "Lorem ipsum"
        ],
        [
                "judul" => "Lorem ipsum",
                "deskripsi" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas minus facilis corrupti voluptate necessitatibus dicta eum esse nemo laudantium sit quae fuga est, alias aliquam numquam quia ullam neque tempore!.",
                "img" => "Assets/dummy_2.jpg",
                "note" => ""
        ],
        [
                "judul" => "Lorem ipsum",
                "deskripsi" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas minus facilis corrupti voluptate necessitatibus dicta eum esse nemo laudantium sit quae fuga est, alias aliquam numquam quia ullam neque tempore!.",
                "img" => "Assets/dummy_3.jpg",
                "note" => ""
        ]
        ];

    $articles = [
        [
            "judul" => "",
            "link" => ""
        ]
        ];

    return view('home', [
        "title" => "DENTS.TALK",
        "hireds" => $hireds,
        "joins" => $joins,
        "programs" => $programs,
        "help" => $help,
        "reviews_1" => $reviews_1,
        "reviews_2" => $reviews_2,
        "options" => $options,
        "articles" => $articles]);
});
