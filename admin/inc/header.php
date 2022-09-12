<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Administration</title>
</head>

<body>
    <header>
        <nav class="navbar bg-light fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <svg width="238" height="34" viewBox="0 0 238 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M165.798 8.51059C165.798 8.28128 165.984 8.09535 166.213 8.09537L166.629 8.09541L167.044 8.09535V8.09535C167.274 8.09532 167.46 8.28124 167.46 8.51059L167.46 8.9259L167.46 9.7565L167.46 13.0789L167.46 13.916C167.46 14.1454 167.274 14.3313 167.044 14.3313V14.3313L166.629 14.3313L166.22 14.3313C165.987 14.3313 165.798 14.1425 165.798 13.9095V13.9095L165.798 13.0789L165.798 12.2483L164.137 12.2483L162.476 12.2483L160.627 12.2483C159.577 12.2483 158.726 13.0992 158.726 14.1488V14.1488L158.726 24.9643L159.582 24.963V24.963C159.751 24.9627 159.888 25.0993 159.888 25.268L159.889 26.1553C159.889 26.324 159.753 26.461 159.584 26.4613V26.4613L155.185 26.468L155.179 26.4666C155.082 26.4416 155.014 26.3538 155.013 26.2531V26.2531L155.012 25.2266L155.012 25.141C155.012 25.0465 155.088 24.9698 155.183 24.9697V24.9697L156.075 24.9683L156.067 19.9214L156.074 12.0098C156.075 11.7869 156.108 11.5653 156.173 11.3521L156.286 10.9829C156.509 10.2541 157.182 9.75643 157.944 9.7564V9.7564L165.798 9.7565L165.798 8.92585L165.798 8.51059V8.51059Z" fill="#1E1E1E" />
                        <rect width="9.60251" height="2.24643" transform="matrix(1.01285 -0.0114934 0.0119916 0.986627 194.084 12.6266)" fill="#3C6F3A" />
                        <path d="M194.033 6.16714L195.477 6.26946L195.542 11.1645C195.543 11.2399 195.609 11.2989 195.686 11.2934V11.2934C195.755 11.2884 195.809 11.2329 195.811 11.1653L195.905 6.29031L196.698 6.23352L196.82 11.1479C196.823 11.2611 196.931 11.3438 197.045 11.3197V11.3197C197.13 11.3015 197.191 11.227 197.19 11.1413L197.126 6.25437L198.021 6.13887L198.143 11.0533C198.146 11.1664 198.254 11.2491 198.368 11.2251V11.2251C198.454 11.2069 198.514 11.1323 198.513 11.0467L198.449 6.15971L199.303 6.20141L199.367 11.0402C199.369 11.15 199.458 11.2398 199.57 11.2453V11.2453C199.693 11.2513 199.796 11.1549 199.794 11.0349L199.731 6.22226L200.687 6.20524L200.751 11.0201C200.752 11.1333 200.86 11.2168 200.974 11.1927V11.1927C201.059 11.1747 201.119 11.1006 201.118 11.0156L201.054 6.1276L201.908 6.1693L202.03 11.0837C202.033 11.1969 202.141 11.2796 202.254 11.2555V11.2555C202.34 11.2373 202.401 11.1627 202.4 11.0771L202.336 6.19014L203.719 6.19398L203.845 12.2433L194.119 12.3536L194.033 6.16714Z" fill="#3C6F3A" />
                        <path d="M195.16 15.1286L202.943 15.1121V15.1121C203.066 15.6679 202.889 16.2465 202.473 16.6458L202.447 16.6712L201.14 17.4239C200.663 17.6987 200.28 18.1051 200.04 18.5916V18.5916L200.097 20.0272L200.194 20.339C200.317 20.7332 200.489 21.1111 200.707 21.4643L200.751 21.5353C201.027 21.9836 201.222 22.4752 201.327 22.9882V22.9882C201.448 23.5803 201.446 24.1898 201.322 24.7812L201.252 25.1109C201.19 25.4063 201.091 25.6931 200.957 25.9648L200.782 26.3187C200.666 26.5535 200.5 26.7617 200.295 26.9293V26.9293C200.136 27.0593 199.957 27.163 199.763 27.236L199.383 27.3795L199.207 27.3759C198.62 27.3639 198.08 27.0592 197.778 26.5688V26.5688L197.231 25.6824L197.102 25.2683C196.907 24.6447 196.836 23.9909 196.892 23.3415V23.3415V23.3415C197.07 22.4419 197.376 21.5709 197.802 20.754L197.856 20.6503L197.949 20.2952C198.079 19.8016 198.125 19.2908 198.086 18.7828V18.7828L198.052 18.7061C197.862 18.2646 197.568 17.8726 197.194 17.5612V17.5612L195.649 16.849V16.849C195.168 16.4775 194.959 15.8637 195.117 15.286L195.16 15.1286Z" fill="url(#paint0_linear_0_1)" />
                        <rect width="9.60251" height="2.24643" transform="matrix(1.01285 -0.0114934 0.0119916 0.986627 120.084 11.6266)" fill="#3C6F3A" />
                        <path d="M120.033 5.16714L121.477 5.26946L121.542 10.1645C121.543 10.2399 121.609 10.2989 121.686 10.2934V10.2934C121.755 10.2884 121.809 10.2329 121.811 10.1653L121.905 5.29031L122.698 5.23352L122.82 10.1479C122.823 10.2611 122.931 10.3438 123.045 10.3197V10.3197C123.13 10.3015 123.191 10.227 123.19 10.1413L123.126 5.25437L124.021 5.13887L124.143 10.0533C124.146 10.1664 124.254 10.2491 124.368 10.2251V10.2251C124.454 10.2069 124.514 10.1323 124.513 10.0467L124.449 5.15971L125.303 5.20141L125.367 10.0402C125.369 10.15 125.458 10.2398 125.57 10.2453V10.2453C125.693 10.2513 125.796 10.1549 125.794 10.0349L125.731 5.22226L126.687 5.20524L126.751 10.0201C126.752 10.1333 126.86 10.2168 126.974 10.1927V10.1927C127.059 10.1747 127.119 10.1006 127.118 10.0156L127.054 5.1276L127.908 5.1693L128.03 10.0837C128.033 10.1969 128.141 10.2796 128.254 10.2555V10.2555C128.34 10.2373 128.401 10.1627 128.4 10.0771L128.336 5.19014L129.719 5.19398L129.845 11.2433L120.119 11.3536L120.033 5.16714Z" fill="#3C6F3A" />
                        <path d="M121.16 14.1286L128.943 14.1121V14.1121C129.066 14.6679 128.889 15.2465 128.473 15.6458L128.447 15.6712L127.14 16.4239C126.663 16.6987 126.28 17.1051 126.04 17.5916V17.5916L126.097 19.0272L126.194 19.339C126.317 19.7332 126.489 20.1111 126.707 20.4643L126.751 20.5353C127.027 20.9836 127.222 21.4752 127.327 21.9882V21.9882C127.448 22.5803 127.446 23.1898 127.322 23.7812L127.252 24.1109C127.19 24.4063 127.091 24.6931 126.957 24.9648L126.782 25.3187C126.666 25.5535 126.5 25.7617 126.295 25.9293V25.9293C126.136 26.0593 125.957 26.163 125.763 26.236L125.383 26.3795L125.207 26.3759C124.62 26.3639 124.08 26.0592 123.778 25.5688V25.5688L123.231 24.6824L123.102 24.2683C122.907 23.6447 122.836 22.9909 122.892 22.3415V22.3415V22.3415C123.07 21.4419 123.376 20.5709 123.802 19.754L123.856 19.6503L123.949 19.2952C124.079 18.8016 124.125 18.2908 124.086 17.7828V17.7828L124.052 17.7061C123.862 17.2646 123.568 16.8726 123.194 16.5612V16.5612L121.649 15.849V15.849C121.168 15.4775 120.959 14.8637 121.117 14.286L121.16 14.1286Z" fill="url(#paint1_linear_0_1)" />
                        <rect width="9.60251" height="2.24643" transform="matrix(1.01285 -0.0114934 0.0119916 0.986627 93.0837 11.6266)" fill="#3C6F3A" />
                        <path d="M93.0327 5.16714L94.4773 5.26946L94.5419 10.1645C94.5429 10.2399 94.609 10.2989 94.6862 10.2934V10.2934C94.7554 10.2884 94.8094 10.2329 94.8107 10.1653L94.9046 5.29031L95.6984 5.23352L95.8202 10.1479C95.8231 10.2611 95.931 10.3438 96.0446 10.3197V10.3197C96.1305 10.3015 96.1914 10.227 96.1903 10.1413L96.1257 5.25437L97.0215 5.13887L97.1433 10.0533C97.1461 10.1664 97.2541 10.2491 97.3676 10.2251V10.2251C97.4536 10.2069 97.5144 10.1323 97.5133 10.0467L97.4488 5.15971L98.3034 5.20141L98.3673 10.0402C98.3687 10.15 98.4575 10.2398 98.5701 10.2453V10.2453C98.6931 10.2513 98.7958 10.1549 98.7942 10.0349L98.7307 5.22226L99.6872 5.20524L99.7508 10.0201C99.7523 10.1333 99.86 10.2168 99.9736 10.1927V10.1927C100.059 10.1747 100.119 10.1006 100.118 10.0156L100.054 5.1276L100.908 5.1693L101.03 10.0837C101.033 10.1969 101.141 10.2796 101.254 10.2555V10.2555C101.34 10.2373 101.401 10.1627 101.4 10.0771L101.336 5.19014L102.719 5.19398L102.845 11.2433L93.1194 11.3536L93.0327 5.16714Z" fill="#3C6F3A" />
                        <path d="M94.1602 14.1286L101.943 14.1121V14.1121C102.066 14.6679 101.889 15.2465 101.473 15.6458L101.447 15.6712L100.14 16.4239C99.6631 16.6987 99.2802 17.1051 99.0399 17.5916V17.5916L99.0967 19.0272L99.1939 19.339C99.3168 19.7332 99.4891 20.1111 99.7069 20.4643L99.7507 20.5353C100.027 20.9836 100.222 21.4752 100.327 21.9882V21.9882C100.448 22.5803 100.446 23.1898 100.322 23.7812L100.252 24.1109C100.19 24.4063 100.091 24.6931 99.9568 24.9648L99.782 25.3187C99.6661 25.5535 99.5001 25.7617 99.2953 25.9293V25.9293C99.1364 26.0593 98.9565 26.163 98.763 26.236L98.383 26.3795L98.2074 26.3759C97.6201 26.3639 97.0802 26.0592 96.7777 25.5688V25.5688L96.2308 24.6824L96.1017 24.2683C95.9073 23.6447 95.8361 22.9909 95.8918 22.3415V22.3415V22.3415C96.07 21.4419 96.3764 20.5709 96.8022 19.754L96.8563 19.6503L96.9493 19.2952C97.0785 18.8016 97.1246 18.2908 97.0857 17.7828V17.7828L97.0525 17.7061C96.8617 17.2646 96.5677 16.8726 96.1939 16.5612V16.5612L94.6494 15.849V15.849C94.1685 15.4775 93.9595 14.8637 94.1172 14.286L94.1602 14.1286Z" fill="url(#paint2_linear_0_1)" />
                        <g filter="url(#filter0_d_0_1)">
                            <path d="M14.7086 3.36183C14.9268 3.04561 15.3898 3.00131 15.668 3.27005L27.5712 14.7716L17.5553 24.4495V24.4495C15.7998 26.0892 13.0081 26.0663 11.2816 24.3981L5.32715 18.6446C3.62071 16.9957 3.57325 14.3369 5.21983 12.6323V12.6323L14.7086 3.36183V3.36183Z" fill="url(#paint3_linear_0_1)" />
                            <path d="M4.94103 8.75436L4.92862 8.66442C4.802 7.74682 5.07362 6.82066 5.67905 6.10567V6.10567V6.10567C6.02595 5.56935 6.49467 5.11648 7.04965 4.78132V4.78132V4.78132C7.8188 4.30838 8.65479 3.94525 9.53185 3.70311L9.68542 3.66072L10.1432 3.53435C10.8207 3.34731 11.5143 3.21913 12.2158 3.15135V3.15135L13.4809 3.04948L14.4307 3.04948C14.7723 3.04948 15.105 3.15674 15.3787 3.3551V3.3551L12.8484 5.29068V5.29068C12.5704 5.22354 12.281 5.21439 11.9995 5.26385L11.2669 5.39256L10.1071 5.69818V5.69818C9.41305 5.83231 8.7592 6.11471 8.19338 6.52476L7.78767 6.81877L7.68894 6.90054C7.28309 7.23667 7.04965 7.72762 7.04965 8.245V8.245V8.245C6.98349 8.82038 7.20898 9.3921 7.6551 9.78006L7.99853 10.0787L6.5225 11.5049L6.45097 11.4465C5.61576 10.7636 5.0766 9.8023 4.94103 8.75436V8.75436Z" fill="url(#paint4_linear_0_1)" />
                            <path d="M26.9386 15.2809L27.4658 14.6697L20.8236 8.25168L21.9833 8.65917L23.4594 9.37228L23.8327 9.59271C24.8475 10.192 25.8153 10.8675 26.7277 11.6135V11.6135L27.6766 12.5303L28.5201 13.4472V13.4472C29.0812 14.2606 29.5685 15.1225 29.9761 16.0227L30.1015 16.2996L30.5233 17.8277L30.6287 19.4577L30.5233 21.4952V21.4952C30.5233 22.1728 30.4602 22.8491 30.3349 23.515L30.3124 23.6345L30.0033 24.605C29.9286 24.8396 29.8196 25.0618 29.6798 25.2645V25.2645V25.2645C29.5342 25.499 29.1929 25.499 29.0472 25.2645V25.2645L28.8364 24.6532L28.6255 23.6345V22.4678C28.6255 22.0245 28.5771 21.5824 28.4811 21.1495L28.4412 20.9698C28.3536 20.5746 28.215 20.1925 28.029 19.8331L27.9468 19.6743C27.7679 19.3284 27.5338 19.0141 27.2538 18.7435L27.2148 18.7059C26.7587 18.2651 26.1882 17.9609 25.568 17.8277V17.8277L25.5584 17.8259C25.2142 17.7594 24.8643 17.7259 24.5137 17.7259V17.7259L26.9386 15.2809Z" fill="url(#paint5_linear_0_1)" />
                            <g filter="url(#filter1_d_0_1)">
                                <path d="M7.96093 10.0854L9.43697 10.9004V10.9004C10.9105 11.3072 12.4162 11.597 13.9389 11.7667L14.3922 11.8173L15.7628 11.8173L16.0121 11.6202C16.5661 11.1823 17.3432 11.1036 17.9825 11.4125V11.4125C18.1176 11.4777 18.2449 11.5607 18.3577 11.6577V11.6577C18.8366 12.0689 19.0392 12.7034 18.8836 13.3045L18.8609 13.3923C18.8339 13.4965 18.7952 13.5976 18.7455 13.6937V13.6937C18.5893 13.9956 18.3305 14.2366 18.0125 14.3762L17.8124 14.4641C17.508 14.5978 17.1681 14.6357 16.8405 14.5724V14.5724C16.4842 14.5035 16.1632 14.319 15.9307 14.0494L15.7628 13.8547L15.2357 13.8547L12.4945 13.651L10.2804 13.2435L8.38266 12.6322L6.4849 11.5116L7.96093 10.0854Z" fill="url(#paint6_linear_0_1)" />
                            </g>
                        </g>
                        <path d="M46.3906 26H42.7578L37.1621 9.82812L31.5078 26H27.8457L35.4043 4.4375H38.8906L46.3906 26ZM39.0957 19.1445L39.9453 21.5176H34.3496L35.1699 19.1445H39.0957ZM64.5254 3.23633V26H61.1562L60.9512 24.0371V3.23633H64.5254ZM49.7012 17.5039C49.7012 15.9805 49.9062 14.7012 50.3164 13.666C50.7461 12.6309 51.293 11.791 51.957 11.1465C52.6211 10.502 53.3535 10.043 54.1543 9.76953C54.9746 9.47656 55.7754 9.33008 56.5566 9.33008C57.1621 9.33008 57.7383 9.39844 58.2852 9.53516C58.832 9.67187 59.3203 9.86719 59.75 10.1211V13.2266C59.418 12.875 59.0469 12.5918 58.6367 12.377C58.2266 12.1621 57.7676 12.0547 57.2598 12.0547C56.6543 12.0547 56.1172 12.2109 55.6484 12.5234C55.1797 12.8164 54.7793 13.2266 54.4473 13.7539C54.1348 14.2812 53.8906 14.8867 53.7148 15.5703C53.5391 16.2539 53.4512 16.9863 53.4512 17.7676C53.4512 18.5488 53.5488 19.2812 53.7441 19.9648C53.9395 20.6289 54.2031 21.2148 54.5352 21.7227C54.8672 22.2305 55.2676 22.6309 55.7363 22.9238C56.2246 23.2168 56.752 23.3633 57.3184 23.3633C58.2754 23.3633 59.0859 22.9824 59.75 22.2207V25.2676C59.2812 25.5215 58.7344 25.7363 58.1094 25.9121C57.5039 26.0684 56.8594 26.1465 56.1758 26.1465C55.3945 26.1465 54.623 26.0098 53.8613 25.7363C53.1191 25.4434 52.4551 24.9746 51.8691 24.3301C51.127 23.4902 50.5801 22.4551 50.2285 21.2246C49.877 19.9746 49.7012 18.7344 49.7012 17.5039ZM72.7285 9.47656L73.1094 11.1758V26H69.5352V9.47656H72.7285ZM86.5566 9.30078C87.2207 9.30078 87.8457 9.4375 88.4316 9.71094C89.0176 9.96484 89.5254 10.3359 89.9551 10.8242C90.4043 11.3125 90.7461 11.8984 90.9805 12.582C91.2344 13.2461 91.3613 13.9688 91.3613 14.75V26H87.8457V17.0059C87.8457 16.3418 87.8359 15.7168 87.8164 15.1309C87.8164 14.5254 87.7578 13.9883 87.6406 13.5195C87.5234 13.0508 87.3281 12.6895 87.0547 12.4355C86.8008 12.1621 86.4004 12.0254 85.8535 12.0254C85.7168 12.0254 85.4238 12.0547 84.9746 12.1133C84.5254 12.1719 84.0078 12.3379 83.4219 12.6113V10.2969C83.9492 9.98438 84.4863 9.74023 85.0332 9.56445C85.5801 9.38867 86.0879 9.30078 86.5566 9.30078ZM81.4883 11.5566C81.7227 11.9082 81.8887 12.2891 81.9863 12.6992C82.1035 13.0898 82.1719 13.5 82.1914 13.9297C82.2305 14.3594 82.2402 14.8086 82.2207 15.2773C82.2207 15.7266 82.2207 16.2051 82.2207 16.7129V26H78.6758V17.0059C78.6758 16.3418 78.6758 15.7168 78.6758 15.1309C78.6758 14.5254 78.6172 13.9883 78.5 13.5195C78.3828 13.0508 78.1875 12.6895 77.9141 12.4355C77.6406 12.1621 77.2402 12.0254 76.7129 12.0254C76.4785 12.0254 76.127 12.0742 75.6582 12.1719C75.209 12.25 74.7598 12.3965 74.3105 12.6113V10.2969C74.7793 10.0234 75.2773 9.79883 75.8047 9.62305C76.3516 9.44727 76.8887 9.35938 77.416 9.35938C78.3145 9.35938 79.0664 9.54492 79.6719 9.91602C80.2969 10.2871 80.9023 10.834 81.4883 11.5566ZM107.592 9.47656L107.973 11.1465V26H104.428V9.47656H107.592ZM116.732 11.293C117.064 11.625 117.318 12.0156 117.494 12.4648C117.689 12.8945 117.826 13.3535 117.904 13.8418C118.002 14.3105 118.061 14.7891 118.08 15.2773C118.1 15.7656 118.109 16.2441 118.109 16.7129V25.4141V26H114.535V17.0059C114.535 16.3418 114.506 15.707 114.447 15.1016C114.389 14.4961 114.252 13.959 114.037 13.4902C113.822 13.0215 113.529 12.6602 113.158 12.4062C112.787 12.1328 112.27 11.9961 111.605 11.9961C111.332 11.9961 110.961 12.0449 110.492 12.1426C110.043 12.2207 109.604 12.3574 109.174 12.5527V10.2969C109.701 10.0234 110.268 9.78906 110.873 9.59375C111.498 9.39844 112.104 9.30078 112.689 9.30078C113.568 9.30078 114.311 9.48633 114.916 9.85742C115.521 10.209 116.127 10.6875 116.732 11.293ZM130.648 14.1934C130.648 13.4512 130.785 12.7871 131.059 12.2012C131.332 11.5957 131.713 11.0879 132.201 10.6777C132.689 10.248 133.236 9.91602 133.842 9.68164C134.467 9.42773 135.111 9.27148 135.775 9.21289V12.1426C135.268 12.2402 134.867 12.4453 134.574 12.7578C134.301 13.0703 134.164 13.5098 134.164 14.0762C134.164 14.5449 134.311 14.9258 134.604 15.2188C134.916 15.4922 135.307 15.7363 135.775 15.9512V19.0859C135.443 18.9883 135.102 18.8809 134.75 18.7637C134.418 18.627 134.086 18.4805 133.754 18.3242C132.719 17.7773 131.938 17.2012 131.41 16.5957C130.902 15.9902 130.648 15.1895 130.648 14.1934ZM140.434 12.9629C139.906 12.6895 139.34 12.4844 138.734 12.3477C138.148 12.2109 137.562 12.123 136.977 12.084V9.18359C137.855 9.22266 138.666 9.34961 139.408 9.56445C140.15 9.75977 140.873 10.082 141.576 10.5312L140.434 12.9629ZM132.201 22.3086C132.592 22.582 133.051 22.8359 133.578 23.0703C134.125 23.3047 134.809 23.4219 135.629 23.4219H135.775V26.1465C135.287 26.1465 134.838 26.127 134.428 26.0879C134.018 26.0684 133.607 26.0098 133.197 25.9121C132.807 25.7949 132.406 25.6387 131.996 25.4434C131.586 25.248 131.156 24.9941 130.707 24.6816L132.201 22.3086ZM136.977 16.4199C137.562 16.6152 138.158 16.8301 138.764 17.0645C139.369 17.2988 139.916 17.5918 140.404 17.9434C140.912 18.2949 141.322 18.7344 141.635 19.2617C141.967 19.7695 142.133 20.4141 142.133 21.1953C142.133 21.957 141.996 22.6211 141.723 23.1875C141.449 23.7539 141.078 24.2422 140.609 24.6523C140.16 25.0625 139.623 25.3848 138.998 25.6191C138.373 25.8535 137.699 26.0098 136.977 26.0879V23.3047C137.641 23.1875 138.148 22.9824 138.5 22.6895C138.871 22.377 139.057 21.9668 139.057 21.459C139.057 20.9512 138.852 20.5605 138.441 20.2871C138.051 19.9941 137.562 19.7402 136.977 19.5254V16.4199ZM151.449 20.9902C151.449 21.6543 151.537 22.1719 151.713 22.543C151.889 22.9141 152.133 23.1973 152.445 23.3926C152.777 23.5879 153.139 23.7148 153.529 23.7734C153.939 23.8125 154.369 23.832 154.818 23.832V26C154.564 26.0391 154.311 26.0684 154.057 26.0879C153.842 26.1074 153.578 26.1172 153.266 26.1172C152.973 26.1367 152.68 26.1465 152.387 26.1465C152.094 26.1465 151.791 26.1367 151.479 26.1172C151.186 26.0977 150.932 26.0684 150.717 26.0293C150.053 25.9121 149.535 25.6289 149.164 25.1797C148.793 24.7109 148.51 24.2031 148.314 23.6562C148.139 23.0898 148.021 22.543 147.963 22.0156C147.924 21.4883 147.904 21.0781 147.904 20.7852V11.8789H145.736V9.47656H147.904V4.78906H151.449V9.47656H154.086V11.8789H151.449V20.9902ZM169.877 21.0195C169.877 21.8984 170.053 22.5527 170.404 22.9824C170.775 23.4121 171.303 23.666 171.986 23.7441V26.1172C171.908 26.1367 171.781 26.1465 171.605 26.1465C170.941 26.1465 170.297 26.0586 169.672 25.8828C169.066 25.707 168.529 25.4238 168.061 25.0332C167.592 24.6426 167.221 24.125 166.947 23.4805C166.693 22.8359 166.566 22.0449 166.566 21.1074C166.566 20.209 166.752 19.4375 167.123 18.793C167.514 18.1289 168.002 17.5918 168.588 17.1816C169.193 16.752 169.877 16.4395 170.639 16.2441C171.4 16.0293 172.172 15.9219 172.953 15.9219H174.242V18.002H173.598C173.207 18.002 172.797 18.041 172.367 18.1191C171.938 18.1973 171.537 18.3438 171.166 18.5586C170.795 18.7734 170.482 19.0859 170.229 19.4961C169.994 19.8867 169.877 20.3945 169.877 21.0195ZM178.988 21.1074C178.988 21.2637 178.998 21.498 179.018 21.8105C179.037 22.1035 179.076 22.4062 179.135 22.7188C179.193 23.0312 179.281 23.3145 179.398 23.5684C179.535 23.8223 179.711 23.9883 179.926 24.0664L178.988 26.0293C178.734 26.0293 178.461 25.9707 178.168 25.8535C177.895 25.7363 177.621 25.5703 177.348 25.3555C177.094 25.1406 176.869 24.9062 176.674 24.6523C176.498 24.3789 176.361 24.0859 176.264 23.7734C176.068 24.2617 175.678 24.7012 175.092 25.0918C174.525 25.4629 173.891 25.7363 173.188 25.9121V23.6855C173.656 23.5879 174.076 23.4023 174.447 23.1289C174.838 22.8359 175.17 22.4941 175.443 22.1035V15.9219C175.443 14.9648 175.395 14.2031 175.297 13.6367C175.199 13.0703 175.033 12.6602 174.799 12.4062C174.564 12.1328 174.271 11.9668 173.92 11.9082C173.588 11.8301 173.188 11.791 172.719 11.791C172.289 11.791 171.879 11.8496 171.488 11.9668C171.117 12.0645 170.766 12.1914 170.434 12.3477C170.121 12.4844 169.838 12.6406 169.584 12.8164C169.35 12.9922 169.174 13.1289 169.057 13.2266L167.738 11.2051C167.934 10.9902 168.227 10.7754 168.617 10.5605C169.008 10.3262 169.457 10.1211 169.965 9.94531C170.473 9.76953 171.02 9.63281 171.605 9.53516C172.211 9.41797 172.836 9.35938 173.48 9.35938C174.066 9.35938 174.633 9.41797 175.18 9.53516C175.746 9.65234 176.254 9.84766 176.703 10.1211C177.172 10.3945 177.572 10.7656 177.904 11.2344C178.256 11.6836 178.5 12.25 178.637 12.9336C178.773 13.6172 178.861 14.3105 178.9 15.0137C178.959 15.6973 178.988 16.3809 178.988 17.0645V20.873V21.1074ZM189.301 20.9902C189.301 21.6543 189.389 22.1719 189.564 22.543C189.74 22.9141 189.984 23.1973 190.297 23.3926C190.629 23.5879 190.99 23.7148 191.381 23.7734C191.791 23.8125 192.221 23.832 192.67 23.832V26C192.416 26.0391 192.162 26.0684 191.908 26.0879C191.693 26.1074 191.43 26.1172 191.117 26.1172C190.824 26.1367 190.531 26.1465 190.238 26.1465C189.945 26.1465 189.643 26.1367 189.33 26.1172C189.037 26.0977 188.783 26.0684 188.568 26.0293C187.904 25.9121 187.387 25.6289 187.016 25.1797C186.645 24.7109 186.361 24.2031 186.166 23.6562C185.99 23.0898 185.873 22.543 185.814 22.0156C185.775 21.4883 185.756 21.0781 185.756 20.7852V11.8789H183.588V9.47656H185.756V4.78906H189.301V9.47656H191.938V11.8789H189.301V20.9902ZM212.621 9.38867C213.695 9.44727 214.672 9.71094 215.551 10.1797C216.43 10.6289 217.162 11.2344 217.748 11.9961C218.354 12.7383 218.822 13.6074 219.154 14.6035C219.486 15.5996 219.652 16.6641 219.652 17.7969C219.652 18.9297 219.477 19.9941 219.125 20.9902C218.793 21.9668 218.324 22.8262 217.719 23.5684C217.113 24.291 216.371 24.877 215.492 25.3262C214.613 25.7754 213.656 26.0391 212.621 26.1172V23.3047C213.598 23.0898 214.389 22.4746 214.994 21.459C215.619 20.4434 215.932 19.2227 215.932 17.7969C215.932 17.0742 215.854 16.4004 215.697 15.7754C215.561 15.1309 215.346 14.5547 215.053 14.0469C214.76 13.5391 214.408 13.1191 213.998 12.7871C213.588 12.4551 213.129 12.2402 212.621 12.1426V9.38867ZM204.447 17.7383C204.447 16.6055 204.613 15.5508 204.945 14.5742C205.277 13.5977 205.746 12.748 206.352 12.0254C206.977 11.2832 207.719 10.6875 208.578 10.2383C209.438 9.78906 210.385 9.51563 211.42 9.41797V12.1426C210.443 12.3574 209.662 12.9727 209.076 13.9883C208.49 15.0039 208.197 16.2246 208.197 17.6504C208.197 18.373 208.266 19.0566 208.402 19.7012C208.559 20.3457 208.773 20.9219 209.047 21.4297C209.32 21.9375 209.652 22.3574 210.043 22.6895C210.453 23.0215 210.912 23.2266 211.42 23.3047V26.1172C210.346 26.0391 209.379 25.7754 208.52 25.3262C207.66 24.8574 206.928 24.252 206.322 23.5098C205.717 22.7676 205.248 21.8984 204.916 20.9023C204.604 19.9062 204.447 18.8516 204.447 17.7383ZM227.416 9.47656L227.797 11.1465V26H224.252V9.47656H227.416ZM236.557 11.293C236.889 11.625 237.143 12.0156 237.318 12.4648C237.514 12.8945 237.65 13.3535 237.729 13.8418C237.826 14.3105 237.885 14.7891 237.904 15.2773C237.924 15.7656 237.934 16.2441 237.934 16.7129V25.4141V26H234.359V17.0059C234.359 16.3418 234.33 15.707 234.271 15.1016C234.213 14.4961 234.076 13.959 233.861 13.4902C233.646 13.0215 233.354 12.6602 232.982 12.4062C232.611 12.1328 232.094 11.9961 231.43 11.9961C231.156 11.9961 230.785 12.0449 230.316 12.1426C229.867 12.2207 229.428 12.3574 228.998 12.5527V10.2969C229.525 10.0234 230.092 9.78906 230.697 9.59375C231.322 9.39844 231.928 9.30078 232.514 9.30078C233.393 9.30078 234.135 9.48633 234.74 9.85742C235.346 10.209 235.951 10.6875 236.557 11.293Z" fill="url(#paint7_linear_0_1)" />
                        <defs>
                            <filter id="filter0_d_0_1" x="0.0154419" y="3.04947" width="34.6132" height="30.6149" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                <feOffset dy="4" />
                                <feGaussianBlur stdDeviation="2" />
                                <feComposite in2="hardAlpha" operator="out" />
                                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_0_1" />
                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_0_1" result="shape" />
                            </filter>
                            <filter id="filter1_d_0_1" x="2.48492" y="10.0854" width="20.4502" height="12.5168" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                <feOffset dy="4" />
                                <feGaussianBlur stdDeviation="2" />
                                <feComposite in2="hardAlpha" operator="out" />
                                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_0_1" />
                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_0_1" result="shape" />
                            </filter>
                            <linearGradient id="paint0_linear_0_1" x1="198.997" y1="15.1204" x2="199.023" y2="27.3802" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#3C6F3A" />
                                <stop offset="1" stop-color="#00310E" />
                            </linearGradient>
                            <linearGradient id="paint1_linear_0_1" x1="124.997" y1="14.1204" x2="125.023" y2="26.3802" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#3C6F3A" />
                                <stop offset="1" stop-color="#00310E" />
                            </linearGradient>
                            <linearGradient id="paint2_linear_0_1" x1="97.9969" y1="14.1204" x2="98.0229" y2="26.3802" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#3C6F3A" />
                                <stop offset="1" stop-color="#00310E" />
                            </linearGradient>
                            <linearGradient id="paint3_linear_0_1" x1="19.0837" y1="5.89223" x2="13.4059" y2="25.0787" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#3C6F3A" />
                                <stop offset="1" stop-color="#00310E" />
                            </linearGradient>
                            <linearGradient id="paint4_linear_0_1" x1="12.5473" y1="5.8237" x2="4.34478" y2="9.52551" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#3C6F3A" />
                                <stop offset="1" stop-color="#00310E" />
                            </linearGradient>
                            <linearGradient id="paint5_linear_0_1" x1="23.6619" y1="7.78713" x2="34.6343" y2="19.976" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#3C6F3A" />
                                <stop offset="1" stop-color="#00310E" />
                            </linearGradient>
                            <linearGradient id="paint6_linear_0_1" x1="14.4925" y1="7.72482" x2="11.0223" y2="16.3503" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#3C6F3A" />
                                <stop offset="1" stop-color="#00310E" />
                            </linearGradient>
                            <linearGradient id="paint7_linear_0_1" x1="133.5" y1="-5" x2="133.5" y2="33" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#3C6F3A" />
                                <stop offset="1" stop-color="#00310E" />
                            </linearGradient>
                        </defs>
                    </svg>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title navig" id="offcanvasNavbarLabel">Navigation</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="home.php">Accueil</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="meet.php">Mes rendez-vous</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="messages.php">Mes messages</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="devis.php">Mes devis</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="clients.php">Mes clients</a>
                            </li>
                            <?php
                            if ($_SESSION['user']['u_role'] == 'admin') { ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="users.php">Mes utilisateurs</a>
                                </li>
                            <?php } ?>
                            <li class="nav-item">
                                <a class="nav-link" href="news.php">Gerer mon contenu</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Link
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="profil.php?id=<?= $_SESSION['user']['u_id'] ?>"><i class="bi bi-person-circle"></i> Mon compte</a></li>
                                    <li><a class="dropdown-item" href="../index.php">Retour coté client</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="../views/logout.php">Deconection</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <div class="container my-5 py-5">