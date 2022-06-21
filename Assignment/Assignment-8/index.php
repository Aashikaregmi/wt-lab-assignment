<?php
<?php
$gcesstaffs=[
    "academic"=>[
        [
            "Name"=>"NG",
            "Address"=>"Unknown",
            "Contact"=>[
                "Number1"=>"9862345616",
                "Number2"=>"9862345616"

            ],
            "Subjects"=>[
                "Subject1"=>"WT",
                "Subject1"=>"Java"
            ]
            ],

            [
                "Name"=>"KPD",
                "Address"=>"GBS",
                "Contact"=>[
                    "Number1"=>"9863412345",
                    "Number2"=>"9871234560"

                ],
                "Subjects"=>[
                    "Subject1"=>"MTH1",
                    "Subject2"=>"MTH2"
                ]

                ],

                [
                    "Name"=>"SN",
                    "Address"=>"GBS",
                    "Contact"=>[
                        "Number1"=>"9871234098",
                        "Number2"=>"9871234098"

                    ],
                    "Subjects"=>[
                        "Subject1"=>"FIT",
                        "Subject2"=>"FIT",
                    ]

                ]

                    ],

    "non-academic"=>[
        [
            "Name"=>"ABC",
            "Address"=>"Unknown",
            "Contact"=>[
                "Contact1"=>"9834512345",
                "Contact2"=>"9834512345"

            ]

        ],

        [
            "Name"=>"DEF",
            "Address"=>"Unknown",
            "Contact"=>[
                "Contact1"=>"9834512345",
                "Contact2"=>"9834512345"

            ]
        ]
    ]
];

foreach($gcesstaffs as $faculty=>$members){
    echo $faculty.":<br/><br/>";
    foreach($members as $data=>$specificdata){
        foreach($specificdata as $specificvalue=>$value){
            if(is_array($value) || is_object($value)){
                foreach($value as $i=>$j){
                    echo $i." = ".$j;
                    echo"<br/>";
                }
            }
            else{
                echo $specificvalue." = ".$value;
                echo"<br/>";
            }
        }
        echo "<br/>";
    }
}
?>

?>