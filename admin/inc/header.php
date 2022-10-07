<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/lightbox.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Administration</title>
</head>

<body class="d-flex flex-column min-vh-100">
    <header>
        <nav class="navbar navbar-dark greenbg fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="home.php">
                    <svg width="241" height="39" viewBox="0 0 241 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M165.798 13.5106C165.798 13.2813 165.984 13.0954 166.213 13.0954L166.629 13.0954L167.044 13.0954V13.0954C167.274 13.0953 167.46 13.2812 167.46 13.5106L167.46 13.9259L167.46 14.7565L167.46 18.0789L167.46 18.916C167.46 19.1454 167.274 19.3313 167.044 19.3313V19.3313L166.629 19.3313L166.22 19.3313C165.987 19.3313 165.798 19.1425 165.798 18.9095V18.9095L165.798 18.0789L165.798 17.2483L164.137 17.2483L162.476 17.2483L160.627 17.2483C159.577 17.2483 158.726 18.0992 158.726 19.1488V19.1488L158.726 29.9643L159.582 29.963V29.963C159.751 29.9627 159.888 30.0993 159.888 30.268L159.889 31.1553C159.889 31.324 159.753 31.461 159.584 31.4613V31.4613L155.185 31.468L155.179 31.4666C155.082 31.4416 155.014 31.3538 155.013 31.2531V31.2531L155.012 30.2266L155.012 30.141C155.012 30.0465 155.088 29.9698 155.183 29.9697V29.9697L156.075 29.9683L156.067 24.9214L156.074 17.0098C156.075 16.7869 156.108 16.5653 156.173 16.3521L156.286 15.9829C156.509 15.2541 157.182 14.7564 157.944 14.7564V14.7564L165.798 14.7565L165.798 13.9258L165.798 13.5106V13.5106Z" fill="#8F8F8F" />
                        <rect width="9.60251" height="2.24643" transform="matrix(1.01285 -0.0114934 0.0119916 0.986627 194.084 17.6266)" fill="#8F8F8F" />
                        <path d="M194.033 11.1671L195.477 11.2695L195.542 16.1645C195.543 16.2399 195.609 16.2989 195.686 16.2934V16.2934C195.755 16.2884 195.809 16.2329 195.811 16.1653L195.905 11.2903L196.698 11.2335L196.82 16.1479C196.823 16.2611 196.931 16.3438 197.045 16.3197V16.3197C197.13 16.3015 197.191 16.227 197.19 16.1413L197.126 11.2544L198.021 11.1389L198.143 16.0533C198.146 16.1664 198.254 16.2491 198.368 16.2251V16.2251C198.454 16.2069 198.514 16.1323 198.513 16.0467L198.449 11.1597L199.303 11.2014L199.367 16.0402C199.369 16.15 199.458 16.2398 199.57 16.2453V16.2453C199.693 16.2513 199.796 16.1549 199.794 16.0349L199.731 11.2223L200.687 11.2052L200.751 16.0201C200.752 16.1333 200.86 16.2168 200.974 16.1927V16.1927C201.059 16.1747 201.119 16.1006 201.118 16.0156L201.054 11.1276L201.908 11.1693L202.03 16.0837C202.033 16.1969 202.141 16.2796 202.254 16.2555V16.2555C202.34 16.2373 202.401 16.1627 202.4 16.0771L202.336 11.1901L203.719 11.194L203.845 17.2433L194.119 17.3536L194.033 11.1671Z" fill="url(#paint0_linear_22_68)" />
                        <path d="M195.16 20.1286L202.943 20.1121V20.1121C203.066 20.6679 202.889 21.2465 202.473 21.6458L202.447 21.6712L201.14 22.4239C200.663 22.6987 200.28 23.1051 200.04 23.5916V23.5916L200.097 25.0272L200.194 25.339C200.317 25.7332 200.489 26.1111 200.707 26.4643L200.751 26.5353C201.027 26.9836 201.222 27.4752 201.327 27.9882V27.9882C201.448 28.5803 201.446 29.1898 201.322 29.7812L201.252 30.1109C201.19 30.4063 201.091 30.6931 200.957 30.9648L200.782 31.3187C200.666 31.5535 200.5 31.7617 200.295 31.9293V31.9293C200.136 32.0593 199.957 32.163 199.763 32.236L199.383 32.3795L199.207 32.3759C198.62 32.3639 198.08 32.0592 197.778 31.5688V31.5688L197.231 30.6824L197.102 30.2683C196.907 29.6447 196.836 28.9909 196.892 28.3415V28.3415V28.3415C197.07 27.4419 197.376 26.5709 197.802 25.754L197.856 25.6503L197.949 25.2952C198.079 24.8016 198.125 24.2908 198.086 23.7828V23.7828L198.052 23.7061C197.862 23.2646 197.568 22.8726 197.194 22.5612V22.5612L195.649 21.849V21.849C195.168 21.4775 194.959 20.8637 195.117 20.286L195.16 20.1286Z" fill="url(#paint1_linear_22_68)" />
                        <rect width="9.60251" height="2.24643" transform="matrix(1.01285 -0.0114934 0.0119916 0.986627 120.084 16.6266)" fill="#8F8F8F" />
                        <path d="M120.033 10.1671L121.477 10.2695L121.542 15.1645C121.543 15.2399 121.609 15.2989 121.686 15.2934V15.2934C121.755 15.2884 121.809 15.2329 121.811 15.1653L121.905 10.2903L122.698 10.2335L122.82 15.1479C122.823 15.2611 122.931 15.3438 123.045 15.3197V15.3197C123.13 15.3015 123.191 15.227 123.19 15.1413L123.126 10.2544L124.021 10.1389L124.143 15.0533C124.146 15.1664 124.254 15.2491 124.368 15.2251V15.2251C124.454 15.2069 124.514 15.1323 124.513 15.0467L124.449 10.1597L125.303 10.2014L125.367 15.0402C125.369 15.15 125.458 15.2398 125.57 15.2453V15.2453C125.693 15.2513 125.796 15.1549 125.794 15.0349L125.731 10.2223L126.687 10.2052L126.751 15.0201C126.752 15.1333 126.86 15.2168 126.974 15.1927V15.1927C127.059 15.1747 127.119 15.1006 127.118 15.0156L127.054 10.1276L127.908 10.1693L128.03 15.0837C128.033 15.1969 128.141 15.2796 128.254 15.2555V15.2555C128.34 15.2373 128.401 15.1627 128.4 15.0771L128.336 10.1901L129.719 10.194L129.845 16.2433L120.119 16.3536L120.033 10.1671Z" fill="url(#paint2_linear_22_68)" />
                        <path d="M121.16 19.1286L128.943 19.1121V19.1121C129.066 19.6679 128.889 20.2465 128.473 20.6458L128.447 20.6712L127.14 21.4239C126.663 21.6987 126.28 22.1051 126.04 22.5916V22.5916L126.097 24.0272L126.194 24.339C126.317 24.7332 126.489 25.1111 126.707 25.4643L126.751 25.5353C127.027 25.9836 127.222 26.4752 127.327 26.9882V26.9882C127.448 27.5803 127.446 28.1898 127.322 28.7812L127.252 29.1109C127.19 29.4063 127.091 29.6931 126.957 29.9648L126.782 30.3187C126.666 30.5535 126.5 30.7617 126.295 30.9293V30.9293C126.136 31.0593 125.957 31.163 125.763 31.236L125.383 31.3795L125.207 31.3759C124.62 31.3639 124.08 31.0592 123.778 30.5688V30.5688L123.231 29.6824L123.102 29.2683C122.907 28.6447 122.836 27.9909 122.892 27.3415V27.3415V27.3415C123.07 26.4419 123.376 25.5709 123.802 24.754L123.856 24.6503L123.949 24.2952C124.079 23.8016 124.125 23.2908 124.086 22.7828V22.7828L124.052 22.7061C123.862 22.2646 123.568 21.8726 123.194 21.5612V21.5612L121.649 20.849V20.849C121.168 20.4775 120.959 19.8637 121.117 19.286L121.16 19.1286Z" fill="url(#paint3_linear_22_68)" />
                        <rect width="9.60251" height="2.24643" transform="matrix(1.01285 -0.0114934 0.0119916 0.986627 93.0837 16.6266)" fill="#8F8F8F" />
                        <path d="M93.0327 10.1671L94.4773 10.2695L94.5419 15.1645C94.5429 15.2399 94.609 15.2989 94.6862 15.2934V15.2934C94.7554 15.2884 94.8094 15.2329 94.8107 15.1653L94.9046 10.2903L95.6984 10.2335L95.8202 15.1479C95.8231 15.2611 95.931 15.3438 96.0446 15.3197V15.3197C96.1305 15.3015 96.1914 15.227 96.1903 15.1413L96.1257 10.2544L97.0215 10.1389L97.1433 15.0533C97.1461 15.1664 97.2541 15.2491 97.3676 15.2251V15.2251C97.4536 15.2069 97.5144 15.1323 97.5133 15.0467L97.4488 10.1597L98.3034 10.2014L98.3673 15.0402C98.3687 15.15 98.4575 15.2398 98.5701 15.2453V15.2453C98.6931 15.2513 98.7958 15.1549 98.7942 15.0349L98.7307 10.2223L99.6872 10.2052L99.7508 15.0201C99.7523 15.1333 99.86 15.2168 99.9736 15.1927V15.1927C100.059 15.1747 100.119 15.1006 100.118 15.0156L100.054 10.1276L100.908 10.1693L101.03 15.0837C101.033 15.1969 101.141 15.2796 101.254 15.2555V15.2555C101.34 15.2373 101.401 15.1627 101.4 15.0771L101.336 10.1901L102.719 10.194L102.845 16.2433L93.1194 16.3536L93.0327 10.1671Z" fill="url(#paint4_linear_22_68)" />
                        <path d="M94.1602 19.1286L101.943 19.1121V19.1121C102.066 19.6679 101.889 20.2465 101.473 20.6458L101.447 20.6712L100.14 21.4239C99.6631 21.6987 99.2802 22.1051 99.0399 22.5916V22.5916L99.0967 24.0272L99.1939 24.339C99.3168 24.7332 99.4891 25.1111 99.7069 25.4643L99.7507 25.5353C100.027 25.9836 100.222 26.4752 100.327 26.9882V26.9882C100.448 27.5803 100.446 28.1898 100.322 28.7812L100.252 29.1109C100.19 29.4063 100.091 29.6931 99.9568 29.9648L99.782 30.3187C99.6661 30.5535 99.5001 30.7617 99.2953 30.9293V30.9293C99.1364 31.0593 98.9565 31.163 98.763 31.236L98.383 31.3795L98.2074 31.3759C97.6201 31.3639 97.0802 31.0592 96.7777 30.5688V30.5688L96.2308 29.6824L96.1017 29.2683C95.9073 28.6447 95.8361 27.9909 95.8918 27.3415V27.3415V27.3415C96.07 26.4419 96.3764 25.5709 96.8022 24.754L96.8563 24.6503L96.9493 24.2952C97.0785 23.8016 97.1246 23.2908 97.0857 22.7828V22.7828L97.0525 22.7061C96.8617 22.2646 96.5677 21.8726 96.1939 21.5612V21.5612L94.6494 20.849V20.849C94.1685 20.4775 93.9595 19.8637 94.1172 19.286L94.1602 19.1286Z" fill="url(#paint5_linear_22_68)" />
                        <g filter="url(#filter0_d_22_68)">
                            <path d="M14.7086 8.36183C14.9268 8.04561 15.3898 8.00131 15.668 8.27005L27.5712 19.7716L17.5553 29.4495V29.4495C15.7998 31.0892 13.0081 31.0663 11.2816 29.3981L5.32715 23.6446C3.62071 21.9957 3.57325 19.3369 5.21983 17.6323V17.6323L14.7086 8.36183V8.36183Z" fill="url(#paint6_linear_22_68)" />
                            <path d="M4.94097 13.7544L4.92856 13.6644C4.80194 12.7468 5.07356 11.8207 5.67898 11.1057V11.1057V11.1057C6.02589 10.5694 6.49461 10.1165 7.04959 9.78132V9.78132V9.78132C7.81873 9.30838 8.65473 8.94525 9.53179 8.70311L9.68536 8.66072L10.1431 8.53435C10.8206 8.34731 11.5142 8.21913 12.2157 8.15135V8.15135L13.4809 8.04948L14.4306 8.04948C14.7722 8.04948 15.1049 8.15674 15.3786 8.3551V8.3551L12.8483 10.2907V10.2907C12.5703 10.2235 12.281 10.2144 11.9994 10.2639L11.2668 10.3926L10.1071 10.6982V10.6982C9.41298 10.8323 8.75914 11.1147 8.19332 11.5248L7.7876 11.8188L7.68888 11.9005C7.28303 12.2367 7.04959 12.7276 7.04959 13.245V13.245V13.245C6.98343 13.8204 7.20892 14.3921 7.65504 14.7801L7.99847 15.0787L6.52243 16.5049L6.45091 16.4465C5.6157 15.7636 5.07654 14.8023 4.94097 13.7544V13.7544Z" fill="url(#paint7_linear_22_68)" />
                            <path d="M26.9386 20.2809L27.4658 19.6697L20.8236 13.2517L21.9833 13.6592L23.4594 14.3723L23.8327 14.5927C24.8475 15.192 25.8153 15.8675 26.7277 16.6135V16.6135L27.6766 17.5303L28.5201 18.4472V18.4472C29.0812 19.2606 29.5685 20.1225 29.9761 21.0227L30.1015 21.2996L30.5233 22.8277L30.6287 24.4577L30.5233 26.4952V26.4952C30.5233 27.1728 30.4602 27.8491 30.3349 28.515L30.3124 28.6345L30.0033 29.605C29.9286 29.8396 29.8196 30.0618 29.6798 30.2645V30.2645V30.2645C29.5342 30.499 29.1929 30.499 29.0472 30.2645V30.2645L28.8364 29.6532L28.6255 28.6345V27.4678C28.6255 27.0245 28.5771 26.5824 28.4811 26.1495L28.4412 25.9698C28.3536 25.5746 28.215 25.1925 28.029 24.8331L27.9468 24.6743C27.7679 24.3284 27.5338 24.0141 27.2538 23.7435L27.2148 23.7059C26.7587 23.2651 26.1882 22.9609 25.568 22.8277V22.8277L25.5584 22.8259C25.2142 22.7594 24.8643 22.7259 24.5137 22.7259V22.7259L26.9386 20.2809Z" fill="url(#paint8_linear_22_68)" />
                            <g filter="url(#filter1_d_22_68)">
                                <path d="M7.96093 15.0854L9.43697 15.9004V15.9004C10.9105 16.3072 12.4162 16.597 13.9389 16.7667L14.3922 16.8173L15.7628 16.8173L16.0121 16.6202C16.5661 16.1823 17.3432 16.1036 17.9825 16.4125V16.4125C18.1176 16.4777 18.2449 16.5607 18.3577 16.6577V16.6577C18.8366 17.0689 19.0392 17.7034 18.8836 18.3045L18.8609 18.3923C18.8339 18.4965 18.7952 18.5976 18.7455 18.6937V18.6937C18.5893 18.9956 18.3305 19.2366 18.0125 19.3762L17.8124 19.4641C17.508 19.5978 17.1681 19.6357 16.8405 19.5724V19.5724C16.4842 19.5035 16.1632 19.319 15.9307 19.0494L15.7628 18.8547L15.2357 18.8547L12.4945 18.651L10.2804 18.2435L8.38266 17.6322L6.4849 16.5116L7.96093 15.0854Z" fill="url(#paint9_linear_22_68)" />
                            </g>
                        </g>
                        <path d="M46.3906 31H42.7578L37.1621 14.8281L31.5078 31H27.8457L35.4043 9.4375H38.8906L46.3906 31ZM39.0957 24.1445L39.9453 26.5176H34.3496L35.1699 24.1445H39.0957ZM64.5254 8.23633V31H61.1562L60.9512 29.0371V8.23633H64.5254ZM49.7012 22.5039C49.7012 20.9805 49.9062 19.7012 50.3164 18.666C50.7461 17.6309 51.293 16.791 51.957 16.1465C52.6211 15.502 53.3535 15.043 54.1543 14.7695C54.9746 14.4766 55.7754 14.3301 56.5566 14.3301C57.1621 14.3301 57.7383 14.3984 58.2852 14.5352C58.832 14.6719 59.3203 14.8672 59.75 15.1211V18.2266C59.418 17.875 59.0469 17.5918 58.6367 17.377C58.2266 17.1621 57.7676 17.0547 57.2598 17.0547C56.6543 17.0547 56.1172 17.2109 55.6484 17.5234C55.1797 17.8164 54.7793 18.2266 54.4473 18.7539C54.1348 19.2812 53.8906 19.8867 53.7148 20.5703C53.5391 21.2539 53.4512 21.9863 53.4512 22.7676C53.4512 23.5488 53.5488 24.2812 53.7441 24.9648C53.9395 25.6289 54.2031 26.2148 54.5352 26.7227C54.8672 27.2305 55.2676 27.6309 55.7363 27.9238C56.2246 28.2168 56.752 28.3633 57.3184 28.3633C58.2754 28.3633 59.0859 27.9824 59.75 27.2207V30.2676C59.2812 30.5215 58.7344 30.7363 58.1094 30.9121C57.5039 31.0684 56.8594 31.1465 56.1758 31.1465C55.3945 31.1465 54.623 31.0098 53.8613 30.7363C53.1191 30.4434 52.4551 29.9746 51.8691 29.3301C51.127 28.4902 50.5801 27.4551 50.2285 26.2246C49.877 24.9746 49.7012 23.7344 49.7012 22.5039ZM72.7285 14.4766L73.1094 16.1758V31H69.5352V14.4766H72.7285ZM86.5566 14.3008C87.2207 14.3008 87.8457 14.4375 88.4316 14.7109C89.0176 14.9648 89.5254 15.3359 89.9551 15.8242C90.4043 16.3125 90.7461 16.8984 90.9805 17.582C91.2344 18.2461 91.3613 18.9688 91.3613 19.75V31H87.8457V22.0059C87.8457 21.3418 87.8359 20.7168 87.8164 20.1309C87.8164 19.5254 87.7578 18.9883 87.6406 18.5195C87.5234 18.0508 87.3281 17.6895 87.0547 17.4355C86.8008 17.1621 86.4004 17.0254 85.8535 17.0254C85.7168 17.0254 85.4238 17.0547 84.9746 17.1133C84.5254 17.1719 84.0078 17.3379 83.4219 17.6113V15.2969C83.9492 14.9844 84.4863 14.7402 85.0332 14.5645C85.5801 14.3887 86.0879 14.3008 86.5566 14.3008ZM81.4883 16.5566C81.7227 16.9082 81.8887 17.2891 81.9863 17.6992C82.1035 18.0898 82.1719 18.5 82.1914 18.9297C82.2305 19.3594 82.2402 19.8086 82.2207 20.2773C82.2207 20.7266 82.2207 21.2051 82.2207 21.7129V31H78.6758V22.0059C78.6758 21.3418 78.6758 20.7168 78.6758 20.1309C78.6758 19.5254 78.6172 18.9883 78.5 18.5195C78.3828 18.0508 78.1875 17.6895 77.9141 17.4355C77.6406 17.1621 77.2402 17.0254 76.7129 17.0254C76.4785 17.0254 76.127 17.0742 75.6582 17.1719C75.209 17.25 74.7598 17.3965 74.3105 17.6113V15.2969C74.7793 15.0234 75.2773 14.7988 75.8047 14.623C76.3516 14.4473 76.8887 14.3594 77.416 14.3594C78.3145 14.3594 79.0664 14.5449 79.6719 14.916C80.2969 15.2871 80.9023 15.834 81.4883 16.5566ZM107.592 14.4766L107.973 16.1465V31H104.428V14.4766H107.592ZM116.732 16.293C117.064 16.625 117.318 17.0156 117.494 17.4648C117.689 17.8945 117.826 18.3535 117.904 18.8418C118.002 19.3105 118.061 19.7891 118.08 20.2773C118.1 20.7656 118.109 21.2441 118.109 21.7129V30.4141V31H114.535V22.0059C114.535 21.3418 114.506 20.707 114.447 20.1016C114.389 19.4961 114.252 18.959 114.037 18.4902C113.822 18.0215 113.529 17.6602 113.158 17.4062C112.787 17.1328 112.27 16.9961 111.605 16.9961C111.332 16.9961 110.961 17.0449 110.492 17.1426C110.043 17.2207 109.604 17.3574 109.174 17.5527V15.2969C109.701 15.0234 110.268 14.7891 110.873 14.5938C111.498 14.3984 112.104 14.3008 112.689 14.3008C113.568 14.3008 114.311 14.4863 114.916 14.8574C115.521 15.209 116.127 15.6875 116.732 16.293ZM130.648 19.1934C130.648 18.4512 130.785 17.7871 131.059 17.2012C131.332 16.5957 131.713 16.0879 132.201 15.6777C132.689 15.248 133.236 14.916 133.842 14.6816C134.467 14.4277 135.111 14.2715 135.775 14.2129V17.1426C135.268 17.2402 134.867 17.4453 134.574 17.7578C134.301 18.0703 134.164 18.5098 134.164 19.0762C134.164 19.5449 134.311 19.9258 134.604 20.2188C134.916 20.4922 135.307 20.7363 135.775 20.9512V24.0859C135.443 23.9883 135.102 23.8809 134.75 23.7637C134.418 23.627 134.086 23.4805 133.754 23.3242C132.719 22.7773 131.938 22.2012 131.41 21.5957C130.902 20.9902 130.648 20.1895 130.648 19.1934ZM140.434 17.9629C139.906 17.6895 139.34 17.4844 138.734 17.3477C138.148 17.2109 137.562 17.123 136.977 17.084V14.1836C137.855 14.2227 138.666 14.3496 139.408 14.5645C140.15 14.7598 140.873 15.082 141.576 15.5312L140.434 17.9629ZM132.201 27.3086C132.592 27.582 133.051 27.8359 133.578 28.0703C134.125 28.3047 134.809 28.4219 135.629 28.4219H135.775V31.1465C135.287 31.1465 134.838 31.127 134.428 31.0879C134.018 31.0684 133.607 31.0098 133.197 30.9121C132.807 30.7949 132.406 30.6387 131.996 30.4434C131.586 30.248 131.156 29.9941 130.707 29.6816L132.201 27.3086ZM136.977 21.4199C137.562 21.6152 138.158 21.8301 138.764 22.0645C139.369 22.2988 139.916 22.5918 140.404 22.9434C140.912 23.2949 141.322 23.7344 141.635 24.2617C141.967 24.7695 142.133 25.4141 142.133 26.1953C142.133 26.957 141.996 27.6211 141.723 28.1875C141.449 28.7539 141.078 29.2422 140.609 29.6523C140.16 30.0625 139.623 30.3848 138.998 30.6191C138.373 30.8535 137.699 31.0098 136.977 31.0879V28.3047C137.641 28.1875 138.148 27.9824 138.5 27.6895C138.871 27.377 139.057 26.9668 139.057 26.459C139.057 25.9512 138.852 25.5605 138.441 25.2871C138.051 24.9941 137.562 24.7402 136.977 24.5254V21.4199ZM151.449 25.9902C151.449 26.6543 151.537 27.1719 151.713 27.543C151.889 27.9141 152.133 28.1973 152.445 28.3926C152.777 28.5879 153.139 28.7148 153.529 28.7734C153.939 28.8125 154.369 28.832 154.818 28.832V31C154.564 31.0391 154.311 31.0684 154.057 31.0879C153.842 31.1074 153.578 31.1172 153.266 31.1172C152.973 31.1367 152.68 31.1465 152.387 31.1465C152.094 31.1465 151.791 31.1367 151.479 31.1172C151.186 31.0977 150.932 31.0684 150.717 31.0293C150.053 30.9121 149.535 30.6289 149.164 30.1797C148.793 29.7109 148.51 29.2031 148.314 28.6562C148.139 28.0898 148.021 27.543 147.963 27.0156C147.924 26.4883 147.904 26.0781 147.904 25.7852V16.8789H145.736V14.4766H147.904V9.78906H151.449V14.4766H154.086V16.8789H151.449V25.9902ZM169.877 26.0195C169.877 26.8984 170.053 27.5527 170.404 27.9824C170.775 28.4121 171.303 28.666 171.986 28.7441V31.1172C171.908 31.1367 171.781 31.1465 171.605 31.1465C170.941 31.1465 170.297 31.0586 169.672 30.8828C169.066 30.707 168.529 30.4238 168.061 30.0332C167.592 29.6426 167.221 29.125 166.947 28.4805C166.693 27.8359 166.566 27.0449 166.566 26.1074C166.566 25.209 166.752 24.4375 167.123 23.793C167.514 23.1289 168.002 22.5918 168.588 22.1816C169.193 21.752 169.877 21.4395 170.639 21.2441C171.4 21.0293 172.172 20.9219 172.953 20.9219H174.242V23.002H173.598C173.207 23.002 172.797 23.041 172.367 23.1191C171.938 23.1973 171.537 23.3438 171.166 23.5586C170.795 23.7734 170.482 24.0859 170.229 24.4961C169.994 24.8867 169.877 25.3945 169.877 26.0195ZM178.988 26.1074C178.988 26.2637 178.998 26.498 179.018 26.8105C179.037 27.1035 179.076 27.4062 179.135 27.7188C179.193 28.0312 179.281 28.3145 179.398 28.5684C179.535 28.8223 179.711 28.9883 179.926 29.0664L178.988 31.0293C178.734 31.0293 178.461 30.9707 178.168 30.8535C177.895 30.7363 177.621 30.5703 177.348 30.3555C177.094 30.1406 176.869 29.9062 176.674 29.6523C176.498 29.3789 176.361 29.0859 176.264 28.7734C176.068 29.2617 175.678 29.7012 175.092 30.0918C174.525 30.4629 173.891 30.7363 173.188 30.9121V28.6855C173.656 28.5879 174.076 28.4023 174.447 28.1289C174.838 27.8359 175.17 27.4941 175.443 27.1035V20.9219C175.443 19.9648 175.395 19.2031 175.297 18.6367C175.199 18.0703 175.033 17.6602 174.799 17.4062C174.564 17.1328 174.271 16.9668 173.92 16.9082C173.588 16.8301 173.188 16.791 172.719 16.791C172.289 16.791 171.879 16.8496 171.488 16.9668C171.117 17.0645 170.766 17.1914 170.434 17.3477C170.121 17.4844 169.838 17.6406 169.584 17.8164C169.35 17.9922 169.174 18.1289 169.057 18.2266L167.738 16.2051C167.934 15.9902 168.227 15.7754 168.617 15.5605C169.008 15.3262 169.457 15.1211 169.965 14.9453C170.473 14.7695 171.02 14.6328 171.605 14.5352C172.211 14.418 172.836 14.3594 173.48 14.3594C174.066 14.3594 174.633 14.418 175.18 14.5352C175.746 14.6523 176.254 14.8477 176.703 15.1211C177.172 15.3945 177.572 15.7656 177.904 16.2344C178.256 16.6836 178.5 17.25 178.637 17.9336C178.773 18.6172 178.861 19.3105 178.9 20.0137C178.959 20.6973 178.988 21.3809 178.988 22.0645V25.873V26.1074ZM189.301 25.9902C189.301 26.6543 189.389 27.1719 189.564 27.543C189.74 27.9141 189.984 28.1973 190.297 28.3926C190.629 28.5879 190.99 28.7148 191.381 28.7734C191.791 28.8125 192.221 28.832 192.67 28.832V31C192.416 31.0391 192.162 31.0684 191.908 31.0879C191.693 31.1074 191.43 31.1172 191.117 31.1172C190.824 31.1367 190.531 31.1465 190.238 31.1465C189.945 31.1465 189.643 31.1367 189.33 31.1172C189.037 31.0977 188.783 31.0684 188.568 31.0293C187.904 30.9121 187.387 30.6289 187.016 30.1797C186.645 29.7109 186.361 29.2031 186.166 28.6562C185.99 28.0898 185.873 27.543 185.814 27.0156C185.775 26.4883 185.756 26.0781 185.756 25.7852V16.8789H183.588V14.4766H185.756V9.78906H189.301V14.4766H191.938V16.8789H189.301V25.9902ZM212.621 14.3887C213.695 14.4473 214.672 14.7109 215.551 15.1797C216.43 15.6289 217.162 16.2344 217.748 16.9961C218.354 17.7383 218.822 18.6074 219.154 19.6035C219.486 20.5996 219.652 21.6641 219.652 22.7969C219.652 23.9297 219.477 24.9941 219.125 25.9902C218.793 26.9668 218.324 27.8262 217.719 28.5684C217.113 29.291 216.371 29.877 215.492 30.3262C214.613 30.7754 213.656 31.0391 212.621 31.1172V28.3047C213.598 28.0898 214.389 27.4746 214.994 26.459C215.619 25.4434 215.932 24.2227 215.932 22.7969C215.932 22.0742 215.854 21.4004 215.697 20.7754C215.561 20.1309 215.346 19.5547 215.053 19.0469C214.76 18.5391 214.408 18.1191 213.998 17.7871C213.588 17.4551 213.129 17.2402 212.621 17.1426V14.3887ZM204.447 22.7383C204.447 21.6055 204.613 20.5508 204.945 19.5742C205.277 18.5977 205.746 17.748 206.352 17.0254C206.977 16.2832 207.719 15.6875 208.578 15.2383C209.438 14.7891 210.385 14.5156 211.42 14.418V17.1426C210.443 17.3574 209.662 17.9727 209.076 18.9883C208.49 20.0039 208.197 21.2246 208.197 22.6504C208.197 23.373 208.266 24.0566 208.402 24.7012C208.559 25.3457 208.773 25.9219 209.047 26.4297C209.32 26.9375 209.652 27.3574 210.043 27.6895C210.453 28.0215 210.912 28.2266 211.42 28.3047V31.1172C210.346 31.0391 209.379 30.7754 208.52 30.3262C207.66 29.8574 206.928 29.252 206.322 28.5098C205.717 27.7676 205.248 26.8984 204.916 25.9023C204.604 24.9062 204.447 23.8516 204.447 22.7383ZM227.416 14.4766L227.797 16.1465V31H224.252V14.4766H227.416ZM236.557 16.293C236.889 16.625 237.143 17.0156 237.318 17.4648C237.514 17.8945 237.65 18.3535 237.729 18.8418C237.826 19.3105 237.885 19.7891 237.904 20.2773C237.924 20.7656 237.934 21.2441 237.934 21.7129V30.4141V31H234.359V22.0059C234.359 21.3418 234.33 20.707 234.271 20.1016C234.213 19.4961 234.076 18.959 233.861 18.4902C233.646 18.0215 233.354 17.6602 232.982 17.4062C232.611 17.1328 232.094 16.9961 231.43 16.9961C231.156 16.9961 230.785 17.0449 230.316 17.1426C229.867 17.2207 229.428 17.3574 228.998 17.5527V15.2969C229.525 15.0234 230.092 14.7891 230.697 14.5938C231.322 14.3984 231.928 14.3008 232.514 14.3008C233.393 14.3008 234.135 14.4863 234.74 14.8574C235.346 15.209 235.951 15.6875 236.557 16.293Z" fill="url(#paint10_linear_22_68)" />
                        <defs>
                            <filter id="filter0_d_22_68" x="0.0153809" y="8.04947" width="34.6133" height="30.6149" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                <feOffset dy="4" />
                                <feGaussianBlur stdDeviation="2" />
                                <feComposite in2="hardAlpha" operator="out" />
                                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_22_68" />
                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_22_68" result="shape" />
                            </filter>
                            <filter id="filter1_d_22_68" x="2.48486" y="15.0854" width="20.4503" height="12.5168" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                <feOffset dy="4" />
                                <feGaussianBlur stdDeviation="2" />
                                <feComposite in2="hardAlpha" operator="out" />
                                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_22_68" />
                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_22_68" result="shape" />
                            </filter>
                            <linearGradient id="paint0_linear_22_68" x1="198.901" y1="11.1119" x2="198.972" y2="17.2986" gradientUnits="userSpaceOnUse">
                                <stop stop-color="white" />
                                <stop offset="1" stop-color="#8F8F8F" />
                            </linearGradient>
                            <linearGradient id="paint1_linear_22_68" x1="198.997" y1="20.1204" x2="199.023" y2="32.3802" gradientUnits="userSpaceOnUse">
                                <stop stop-color="white" />
                                <stop offset="0.0001" stop-color="#8F8F8F" />
                                <stop offset="1" stop-color="#3A3A3A" />
                            </linearGradient>
                            <linearGradient id="paint2_linear_22_68" x1="124.901" y1="10.1119" x2="124.972" y2="16.2986" gradientUnits="userSpaceOnUse">
                                <stop stop-color="white" />
                                <stop offset="1" stop-color="#8F8F8F" />
                            </linearGradient>
                            <linearGradient id="paint3_linear_22_68" x1="124.997" y1="19.1204" x2="125.023" y2="31.3802" gradientUnits="userSpaceOnUse">
                                <stop stop-color="white" />
                                <stop offset="0.0001" stop-color="#8F8F8F" />
                                <stop offset="1" stop-color="#3A3A3A" />
                            </linearGradient>
                            <linearGradient id="paint4_linear_22_68" x1="97.9014" y1="10.1119" x2="97.9716" y2="16.2986" gradientUnits="userSpaceOnUse">
                                <stop stop-color="white" />
                                <stop offset="1" stop-color="#8F8F8F" />
                            </linearGradient>
                            <linearGradient id="paint5_linear_22_68" x1="97.9969" y1="19.1204" x2="98.0229" y2="31.3802" gradientUnits="userSpaceOnUse">
                                <stop stop-color="white" />
                                <stop offset="0.0001" stop-color="#8F8F8F" />
                                <stop offset="1" stop-color="#3A3A3A" />
                            </linearGradient>
                            <linearGradient id="paint6_linear_22_68" x1="19.0837" y1="10.8922" x2="13.4059" y2="30.0787" gradientUnits="userSpaceOnUse">
                                <stop stop-color="white" />
                                <stop offset="1" stop-color="#3A3A3A" />
                            </linearGradient>
                            <linearGradient id="paint7_linear_22_68" x1="12.5472" y1="10.8237" x2="4.34472" y2="14.5255" gradientUnits="userSpaceOnUse">
                                <stop stop-color="white" />
                                <stop offset="1" stop-color="#3A3A3A" />
                            </linearGradient>
                            <linearGradient id="paint8_linear_22_68" x1="23.6619" y1="12.7871" x2="34.6343" y2="24.976" gradientUnits="userSpaceOnUse">
                                <stop stop-color="white" />
                                <stop offset="1" stop-color="#3A3A3A" />
                            </linearGradient>
                            <linearGradient id="paint9_linear_22_68" x1="14.4925" y1="12.7248" x2="11.0223" y2="21.3503" gradientUnits="userSpaceOnUse">
                                <stop stop-color="white" />
                                <stop offset="1" stop-color="#3A3A3A" />
                            </linearGradient>
                            <linearGradient id="paint10_linear_22_68" x1="133.5" y1="0" x2="133.5" y2="38" gradientUnits="userSpaceOnUse">
                                <stop stop-color="white" />
                                <stop offset="1" stop-color="#3A3A3A" />
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
                                <a class="nav-link text-dark active" aria-current="page" href="home.php"><i class="bi bi-house-fill"></i> Accueil</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="meet.php"><i class="bi bi-calendar3"></i> Mes rendez-vous</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="messages.php"><i class="bi bi-chat-left-text-fill"></i> Mes messages</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="devis.php"><i class="bi bi-receipt"></i> Mes devis</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="clients.php"><i class="bi bi-people-fill"></i> Mes clients</a>
                            </li>
                            <?php
                            if ($_SESSION['user']['u_role'] == 'admin' || $_SESSION['user']['u_role'] == 'editeur') {
                            ?>
                                <li class="nav-item">
                                    <a class="nav-link text-dark" href="users.php">Mes utilisateurs</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link text-dark" href="news.php">Gerer mon contenu</a>
                                </li>
                            <?php
                            }
                            ?>
                            <li class="nav-item dropdown">
                                <a class="nav-link text-dark dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Plus d'options
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="profil.php"><i class="bi bi-person-circle"></i> Mon compte</a></li>
                                    <li><a class="dropdown-item" href="../index.php"><i class="bi bi-door-open-fill"></i> Retour coté client</a></li>
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