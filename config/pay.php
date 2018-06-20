<?php

return [
    'alipay' => [
        'app_id'         => '2016082000295659',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAx1xGwH6wP91MeLZB0C03Wjtx0d2frBMKTyQiGwzq8pa0XNxJ8r88R+yK7amKT+LyPuQOfj7VkiIXNthtZEttniOE348r469zAUk1iEUiOt6m5w6lCawYJv8iuxO0JY7rurkrqdJa8+WBC/epvLxvQJTjJ5RON/RZllsht+R7GBvjbIsdv/qmV6OT8zyU4r6HAMYqhnTNXXaS/YFqDwn+y56GDBAsl01dNyVwWx2x8D9IxZntVQzMnuIPci9LEIFq1hSfQSzk7sVsNoTRz6MCg7WQEp9qb0/0h7KvTDdKWLn47P7cu7tzKJv7HW4liaLhir/kllLFkbOnZe90Xu7lNQIDAQAB',
        'private_key'    => 'MIIEogIBAAKCAQEAyeEXtUoXBsP8jMud4nIHXE5rrpOuKENREPIEnieMvyi33g4gi0esdWiVZnTSsguDInBgfUw38/NhSCK7iuCUjK2CNvyzyWl0WUKdWmuaFolpDEYo7JpbqFsOSF1ULOvX3I+Uffcei9p/E0jpe3LzLgRx3uCPBppbjbN5P18AMKNEOPkHH2+riF0Y2/SKzr7+UpWkszjHVWVXJHtNQPLaHduAbcE3HrrkGd49PZqmLqeUxz2SGbTYtR0/IXCJKKJIkDzKhc2iOg5iCRes2p5SrZi95qnI7n1u8wYiNQ/rBGUM4EOLgiLixyoDudaJlp7ud7uNseuVBdmQ8EBooPhxeQIDAQABAoIBAB49eoisfYCE8RrCEXdvL00TbivrcUYUt1r7ddefAwVLeydnJFbYuKupq996FmmXMeCBxuJd/W+sgGEG2uL1uyrLftrvxZqhEk2gneOChMVldffhtpWilaJFaYFLgaVs+pvOYibwUoIOi8R+woK8eFLnVYtWRfZuPtKeFMZ6W5PtTNiudGr/OHqWnulAmy4QJfwcBMjfb0rOCopoDM8XLq3AaZk5vlrLkDZUDTSM0vO5C8jqV7Ebpxc831YdJSKcb05u7MdG0cgiFmVFSD7koYPvsIOAhnUIvPQkOw+zBKMKLpuHYmZPJBuCjmbwS+x2tiJZNs69L0cUkFna8+9aD9UCgYEA5oPs5ftXdHMxUykQz/SVMQ9VC7FyR4XG15lv7vHwDE9xAPmtwaWchB4JL4Uc2y0QDcySsDJsFAlowL7U1Itz+apdBzs0mUplCyXah7BLFhtXYx/tHcxGzfWJq7GxvnQSPZH8K6qMgX5pQuLny+VmtGA/IPCV9YeLpC9UdkGET18CgYEA4DK0o0fUbZbMV7wHeHExpllJmNpx+ozaT3HxVnSqq0F3XvHPuKJL9SydptSTZd1RjIIv/aNKvrOvhigUEkopiciirzuWelI17xdMIEjJWxEdl0vpjGZtIWxwnlxoDG9khoF39UXGj1HPfTwKswhubQTbmkLcNQNha1j4UBYf5icCgYBmliOhnh+nlXRIHCh9Q835jWc90vSW2/RIEuL7pfQ8pkYWNwea/IcRTQStf0H+UKmqWnaVr3rl1+IklUjGZmFwpN7Nzw1zguZA9dGxPUXNStGzLYwrDLQeCL4CCQyfQ6yydfuRu07YeleCCtU5qpfwgjzV/fvezznYEbA3CKVHZQKBgErwZ/TUA6uF5lPFI/IcU+44liMjkUmgXzCC85pkcM/BmDcCON6MUTtoaGHlWEeKTMHcmlH7jPZldVwwdVUPuQa3K7nK/ydv51s9vFJmQffQpsV1uGEXs46igppMZPMTINTc3c38PryVKffAZAsn3FFQeF79zkFiGeQZ3xZV7t+tAoGAZ5McykaW0CwOOJFERvgEzZaGIeXGaNdmZJ/ZJB1O6SFBzRmb5T7JMnT/FhwJ3uYAcLiz38yPoB0IIxwHke0MOdlXi2LJJCjHy3N0XTSKNDjl2C/G/NFF/FR3kbFtxT1a992kMeg7zgz1dCZvrjSFkGUOO1fR/1WobJvb+nFmLb8=',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];