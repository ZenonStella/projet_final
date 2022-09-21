<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Traveaux service</title>
</head>

<body>
    <header class="greenbg">
        <nav class="navbar navbar-dark navbar-expand-lg">
            <div class="container-fluid">
                <div class="logo">
                    <a class="navbar-brand" href="home.php">
                        <svg width="264" height="38" viewBox="0 0 264 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M192.798 13.4266C192.798 13.1973 192.984 13.0113 193.213 13.0114L193.629 13.0114L194.044 13.0113V13.0113C194.274 13.0113 194.46 13.1972 194.46 13.4266L194.46 13.8419L194.46 14.6725L194.46 17.9949L194.46 18.832C194.46 19.0614 194.274 19.2473 194.044 19.2473V19.2473L193.629 19.2473L193.22 19.2473C192.987 19.2473 192.798 19.0585 192.798 18.8255V18.8255L192.798 17.9949L192.798 17.1643L191.137 17.1643L189.476 17.1643L187.627 17.1643C186.577 17.1643 185.726 18.0152 185.726 19.0648V19.0648L185.726 29.8803L186.582 29.879V29.879C186.751 29.8787 186.888 30.0153 186.888 30.184L186.889 31.0713C186.889 31.24 186.753 31.377 186.584 31.3773V31.3773L182.185 31.384L182.179 31.3826C182.082 31.3576 182.014 31.2697 182.013 31.169V31.169L182.012 30.1425L182.012 30.057C182.012 29.9625 182.088 29.8858 182.183 29.8857V29.8857L183.075 29.8843L183.067 24.8373L183.074 16.9258C183.075 16.7029 183.108 16.4813 183.173 16.2681L183.286 15.8989C183.509 15.1701 184.182 14.6724 184.944 14.6724V14.6724L192.798 14.6725L192.798 13.8418L192.798 13.4266V13.4266Z" fill="#8F8F8F" />
                            <path d="M48.7977 13.4266C48.7977 13.1973 48.9836 13.0113 49.2129 13.0114L49.6289 13.0114L50.0442 13.0113V13.0113C50.2736 13.0113 50.4595 13.1972 50.4595 13.4266L50.4595 13.8419L50.4595 14.6725L50.4595 17.9949L50.4595 18.832C50.4595 19.0614 50.2736 19.2473 50.0442 19.2473V19.2473L49.6289 19.2473L49.2201 19.2473C48.9872 19.2473 48.7983 19.0585 48.7983 18.8255V18.8255L48.7983 17.9949L48.7983 17.1643L47.1371 17.1643L45.4759 17.1643L43.627 17.1643C42.5773 17.1643 41.7265 18.0152 41.7265 19.0648V19.0648L41.7265 29.8803L42.5819 29.879V29.879C42.7506 29.8787 42.8876 30.0153 42.8879 30.184L42.8892 31.0713C42.8895 31.24 42.7529 31.377 42.5842 31.3773V31.3773L38.1849 31.384L38.1795 31.3826C38.0819 31.3576 38.0136 31.2697 38.0135 31.169V31.169L38.0119 30.1425L38.0118 30.057C38.0116 29.9625 38.0881 29.8858 38.1826 29.8857V29.8857L39.0747 29.8843L39.067 24.8373L39.0744 16.9258C39.0746 16.7029 39.1078 16.4813 39.173 16.2681L39.286 15.8989C39.5089 15.1701 40.1816 14.6724 40.9437 14.6724V14.6724L48.7983 14.6725L48.7979 13.8418L48.7977 13.4266V13.4266Z" fill="#8F8F8F" />
                            <rect width="9.60251" height="2.24643" transform="matrix(1.01285 -0.0114934 0.0119916 0.986627 212.615 17.3007)" fill="#ACABAB" />
                            <path d="M212.564 10.8412L214.009 10.9435L214.074 15.8385C214.075 15.914 214.141 15.973 214.218 15.9674V15.9674C214.287 15.9625 214.341 15.907 214.342 15.8394L214.436 10.9644L215.23 10.9076L215.352 15.822C215.355 15.9352 215.463 16.0179 215.576 15.9938V15.9938C215.662 15.9756 215.723 15.901 215.722 15.8154L215.657 10.9284L216.553 10.8129L216.675 15.7273C216.678 15.8405 216.786 15.9232 216.899 15.8991V15.8991C216.985 15.8809 217.046 15.8064 217.045 15.7207L216.98 10.8338L217.835 10.8755L217.899 15.7143C217.9 15.8241 217.989 15.9138 218.102 15.9193V15.9193C218.225 15.9253 218.327 15.829 218.326 15.709L218.262 10.8963L219.219 10.8793L219.282 15.6942C219.284 15.8074 219.392 15.8909 219.505 15.8668V15.8668C219.591 15.8487 219.651 15.7747 219.65 15.6896L219.585 10.8017L220.44 10.8434L220.562 15.7578C220.565 15.8709 220.673 15.9536 220.786 15.9296V15.9296C220.872 15.9114 220.933 15.8368 220.932 15.7512L220.867 10.8642L222.251 10.8681L222.377 16.9173L212.651 17.0277L212.564 10.8412Z" fill="url(#paint0_linear_22_69)" />
                            <path d="M213.692 19.8026L221.475 19.7861V19.7861C221.598 20.342 221.421 20.9205 221.005 21.3199L220.979 21.3453L219.672 22.098C219.195 22.3728 218.812 22.7791 218.572 23.2657V23.2657L218.628 24.7013L218.725 25.013C218.848 25.4072 219.021 25.7852 219.239 26.1383L219.282 26.2093C219.559 26.6577 219.754 27.1492 219.858 27.6623V27.6623C219.979 28.2543 219.977 28.8639 219.853 29.4553L219.784 29.785C219.722 30.0804 219.623 30.3671 219.488 30.6388L219.314 30.9927C219.198 31.2276 219.032 31.4357 218.827 31.6034V31.6034C218.668 31.7334 218.488 31.837 218.295 31.9101L217.915 32.0535L217.739 32.05C217.152 32.038 216.612 31.7333 216.309 31.2429V31.2429L215.762 30.3565L215.633 29.9424C215.439 29.3188 215.368 28.665 215.423 28.0156V28.0156V28.0156C215.602 27.116 215.908 26.245 216.334 25.428L216.388 25.3243L216.481 24.9693C216.61 24.4757 216.656 23.9649 216.617 23.4569V23.4569L216.584 23.3802C216.393 22.9387 216.099 22.5467 215.725 22.2353V22.2353L214.181 21.5231V21.5231C213.7 21.1516 213.491 20.5378 213.649 19.9601L213.692 19.8026Z" fill="url(#paint1_linear_22_69)" />
                            <g filter="url(#filter0_d_22_69)">
                                <path d="M14.7086 7.36183C14.9268 7.04561 15.3898 7.00131 15.668 7.27005L27.5712 18.7716L17.5553 28.4495V28.4495C15.7998 30.0892 13.0081 30.0663 11.2816 28.3981L5.32715 22.6446C3.62071 20.9957 3.57325 18.3369 5.21983 16.6323V16.6323L14.7086 7.36183V7.36183Z" fill="url(#paint2_linear_22_69)" />
                                <path d="M4.94097 12.7544L4.92856 12.6644C4.80194 11.7468 5.07356 10.8207 5.67898 10.1057V10.1057V10.1057C6.02589 9.56935 6.49461 9.11648 7.04959 8.78132V8.78132V8.78132C7.81873 8.30838 8.65473 7.94525 9.53179 7.70311L9.68536 7.66072L10.1431 7.53435C10.8206 7.34731 11.5142 7.21913 12.2157 7.15135V7.15135L13.4809 7.04948L14.4306 7.04948C14.7722 7.04948 15.1049 7.15674 15.3786 7.3551V7.3551L12.8483 9.29068V9.29068C12.5703 9.22354 12.281 9.21439 11.9994 9.26385L11.2668 9.39256L10.1071 9.69818V9.69818C9.41298 9.83231 8.75914 10.1147 8.19332 10.5248L7.7876 10.8188L7.68888 10.9005C7.28303 11.2367 7.04959 11.7276 7.04959 12.245V12.245V12.245C6.98343 12.8204 7.20892 13.3921 7.65504 13.7801L7.99847 14.0787L6.52243 15.5049L6.45091 15.4465C5.6157 14.7636 5.07654 13.8023 4.94097 12.7544V12.7544Z" fill="url(#paint3_linear_22_69)" />
                                <path d="M26.9386 19.2809L27.4658 18.6697L20.8236 12.2517L21.9833 12.6592L23.4594 13.3723L23.8327 13.5927C24.8475 14.192 25.8153 14.8675 26.7277 15.6135V15.6135L27.6766 16.5303L28.5201 17.4472V17.4472C29.0812 18.2606 29.5685 19.1225 29.9761 20.0227L30.1015 20.2996L30.5233 21.8277L30.6287 23.4577L30.5233 25.4952V25.4952C30.5233 26.1728 30.4602 26.8491 30.3349 27.515L30.3124 27.6345L30.0033 28.605C29.9286 28.8396 29.8196 29.0618 29.6798 29.2645V29.2645V29.2645C29.5342 29.499 29.1929 29.499 29.0472 29.2645V29.2645L28.8364 28.6532L28.6255 27.6345V26.4678C28.6255 26.0245 28.5771 25.5824 28.4811 25.1495L28.4412 24.9698C28.3536 24.5746 28.215 24.1925 28.029 23.8331L27.9468 23.6743C27.7679 23.3284 27.5338 23.0141 27.2538 22.7435L27.2148 22.7059C26.7587 22.2651 26.1882 21.9609 25.568 21.8277V21.8277L25.5584 21.8259C25.2142 21.7594 24.8643 21.7259 24.5137 21.7259V21.7259L26.9386 19.2809Z" fill="url(#paint4_linear_22_69)" />
                                <g filter="url(#filter1_d_22_69)">
                                    <path d="M7.96093 14.0854L9.43697 14.9004V14.9004C10.9105 15.3072 12.4162 15.597 13.9389 15.7667L14.3922 15.8173L15.7628 15.8173L16.0121 15.6202C16.5661 15.1823 17.3432 15.1036 17.9825 15.4125V15.4125C18.1176 15.4777 18.2449 15.5607 18.3577 15.6577V15.6577C18.8366 16.0689 19.0392 16.7034 18.8836 17.3045L18.8609 17.3923C18.8339 17.4965 18.7952 17.5976 18.7455 17.6937V17.6937C18.5893 17.9956 18.3305 18.2366 18.0125 18.3762L17.8124 18.4641C17.508 18.5978 17.1681 18.6357 16.8405 18.5724V18.5724C16.4842 18.5035 16.1632 18.319 15.9307 18.0494L15.7628 17.8547L15.2357 17.8547L12.4945 17.651L10.2804 17.2435L8.38266 16.6322L6.4849 15.5116L7.96093 14.0854Z" fill="url(#paint5_linear_22_69)" />
                                </g>
                            </g>
                            <path d="M39.9297 9.4082V11.8105H33.4844V31H29.9395V11.8105H23.4941V9.4082H39.9297ZM54.8418 26.0195C54.8418 26.8984 55.0176 27.5527 55.3691 27.9824C55.7402 28.4121 56.2676 28.666 56.9512 28.7441V31.1172C56.873 31.1367 56.7461 31.1465 56.5703 31.1465C55.9062 31.1465 55.2617 31.0586 54.6367 30.8828C54.0312 30.707 53.4941 30.4238 53.0254 30.0332C52.5566 29.6426 52.1855 29.125 51.9121 28.4805C51.6582 27.8359 51.5312 27.0449 51.5312 26.1074C51.5312 25.209 51.7168 24.4375 52.0879 23.793C52.4785 23.1289 52.9668 22.5918 53.5527 22.1816C54.1582 21.752 54.8418 21.4395 55.6035 21.2441C56.3652 21.0293 57.1367 20.9219 57.918 20.9219H59.207V23.002H58.5625C58.1719 23.002 57.7617 23.041 57.332 23.1191C56.9023 23.1973 56.502 23.3438 56.1309 23.5586C55.7598 23.7734 55.4473 24.0859 55.1934 24.4961C54.959 24.8867 54.8418 25.3945 54.8418 26.0195ZM63.9531 26.1074C63.9531 26.2637 63.9629 26.498 63.9824 26.8105C64.002 27.1035 64.041 27.4062 64.0996 27.7188C64.1582 28.0312 64.2461 28.3145 64.3633 28.5684C64.5 28.8223 64.6758 28.9883 64.8906 29.0664L63.9531 31.0293C63.6992 31.0293 63.4258 30.9707 63.1328 30.8535C62.8594 30.7363 62.5859 30.5703 62.3125 30.3555C62.0586 30.1406 61.834 29.9062 61.6387 29.6523C61.4629 29.3789 61.3262 29.0859 61.2285 28.7734C61.0332 29.2617 60.6426 29.7012 60.0566 30.0918C59.4902 30.4629 58.8555 30.7363 58.1523 30.9121V28.6855C58.6211 28.5879 59.041 28.4023 59.4121 28.1289C59.8027 27.8359 60.1348 27.4941 60.4082 27.1035V20.9219C60.4082 19.9648 60.3594 19.2031 60.2617 18.6367C60.1641 18.0703 59.998 17.6602 59.7637 17.4062C59.5293 17.1328 59.2363 16.9668 58.8848 16.9082C58.5527 16.8301 58.1523 16.791 57.6836 16.791C57.2539 16.791 56.8438 16.8496 56.4531 16.9668C56.082 17.0645 55.7305 17.1914 55.3984 17.3477C55.0859 17.4844 54.8027 17.6406 54.5488 17.8164C54.3145 17.9922 54.1387 18.1289 54.0215 18.2266L52.7031 16.2051C52.8984 15.9902 53.1914 15.7754 53.582 15.5605C53.9727 15.3262 54.4219 15.1211 54.9297 14.9453C55.4375 14.7695 55.9844 14.6328 56.5703 14.5352C57.1758 14.418 57.8008 14.3594 58.4453 14.3594C59.0312 14.3594 59.5977 14.418 60.1445 14.5352C60.7109 14.6523 61.2188 14.8477 61.668 15.1211C62.1367 15.3945 62.5371 15.7656 62.8691 16.2344C63.2207 16.6836 63.4648 17.25 63.6016 17.9336C63.7383 18.6172 63.8262 19.3105 63.8652 20.0137C63.9238 20.6973 63.9531 21.3809 63.9531 22.0645V25.873V26.1074ZM68.7578 14.4766H72.7715L76.2578 26.2246V31.1172H74.5586L68.7578 14.4766ZM80.9746 14.4766H84.959L79.1582 31.1172H77.459V26.2246L80.9746 14.4766ZM91.6387 26.0195C91.6387 26.8984 91.8145 27.5527 92.166 27.9824C92.5371 28.4121 93.0645 28.666 93.748 28.7441V31.1172C93.6699 31.1367 93.543 31.1465 93.3672 31.1465C92.7031 31.1465 92.0586 31.0586 91.4336 30.8828C90.8281 30.707 90.291 30.4238 89.8223 30.0332C89.3535 29.6426 88.9824 29.125 88.709 28.4805C88.4551 27.8359 88.3281 27.0449 88.3281 26.1074C88.3281 25.209 88.5137 24.4375 88.8848 23.793C89.2754 23.1289 89.7637 22.5918 90.3496 22.1816C90.9551 21.752 91.6387 21.4395 92.4004 21.2441C93.1621 21.0293 93.9336 20.9219 94.7148 20.9219H96.0039V23.002H95.3594C94.9688 23.002 94.5586 23.041 94.1289 23.1191C93.6992 23.1973 93.2988 23.3438 92.9277 23.5586C92.5566 23.7734 92.2441 24.0859 91.9902 24.4961C91.7559 24.8867 91.6387 25.3945 91.6387 26.0195ZM100.75 26.1074C100.75 26.2637 100.76 26.498 100.779 26.8105C100.799 27.1035 100.838 27.4062 100.896 27.7188C100.955 28.0312 101.043 28.3145 101.16 28.5684C101.297 28.8223 101.473 28.9883 101.688 29.0664L100.75 31.0293C100.496 31.0293 100.223 30.9707 99.9297 30.8535C99.6562 30.7363 99.3828 30.5703 99.1094 30.3555C98.8555 30.1406 98.6309 29.9062 98.4355 29.6523C98.2598 29.3789 98.123 29.0859 98.0254 28.7734C97.8301 29.2617 97.4395 29.7012 96.8535 30.0918C96.2871 30.4629 95.6523 30.7363 94.9492 30.9121V28.6855C95.418 28.5879 95.8379 28.4023 96.209 28.1289C96.5996 27.8359 96.9316 27.4941 97.2051 27.1035V20.9219C97.2051 19.9648 97.1562 19.2031 97.0586 18.6367C96.9609 18.0703 96.7949 17.6602 96.5605 17.4062C96.3262 17.1328 96.0332 16.9668 95.6816 16.9082C95.3496 16.8301 94.9492 16.791 94.4805 16.791C94.0508 16.791 93.6406 16.8496 93.25 16.9668C92.8789 17.0645 92.5273 17.1914 92.1953 17.3477C91.8828 17.4844 91.5996 17.6406 91.3457 17.8164C91.1113 17.9922 90.9355 18.1289 90.8184 18.2266L89.5 16.2051C89.6953 15.9902 89.9883 15.7754 90.3789 15.5605C90.7695 15.3262 91.2188 15.1211 91.7266 14.9453C92.2344 14.7695 92.7812 14.6328 93.3672 14.5352C93.9727 14.418 94.5977 14.3594 95.2422 14.3594C95.8281 14.3594 96.3945 14.418 96.9414 14.5352C97.5078 14.6523 98.0156 14.8477 98.4648 15.1211C98.9336 15.3945 99.334 15.7656 99.666 16.2344C100.018 16.6836 100.262 17.25 100.398 17.9336C100.535 18.6172 100.623 19.3105 100.662 20.0137C100.721 20.6973 100.75 21.3809 100.75 22.0645V25.873V26.1074ZM109.803 23.4707C109.803 24.1543 109.832 24.7988 109.891 25.4043C109.949 25.9902 110.076 26.5078 110.271 26.957C110.467 27.4062 110.76 27.7676 111.15 28.041C111.541 28.3145 112.059 28.4512 112.703 28.4512C112.957 28.4512 113.318 28.4121 113.787 28.334C114.256 28.2559 114.705 28.1289 115.135 27.9531V30.1211C114.627 30.3945 114.07 30.6387 113.465 30.8535C112.879 31.0488 112.293 31.1465 111.707 31.1465C111.238 31.1465 110.818 31.0977 110.447 31C110.076 30.9219 109.725 30.7949 109.393 30.6191C109.08 30.4238 108.777 30.209 108.484 29.9746C108.191 29.7402 107.898 29.4766 107.605 29.1836C107.273 28.8516 107.01 28.4707 106.814 28.041C106.619 27.5918 106.473 27.1328 106.375 26.6641C106.297 26.1758 106.248 25.6875 106.229 25.1992C106.229 24.7109 106.229 24.2324 106.229 23.7637V14.4766H109.803V23.4707ZM119.91 14.4766V31H116.717L116.336 29.3008V14.4766H119.91ZM124.627 14.4766H128.641L131.717 19.8965V26.0488L128.729 31H124.656L130.047 22.709L124.627 14.4766ZM140.066 14.4766L134.646 22.709L140.037 31H135.965L132.918 25.668V19.4277L136.053 14.4766H140.066ZM152.459 19.1934C152.459 18.4512 152.596 17.7871 152.869 17.2012C153.143 16.5957 153.523 16.0879 154.012 15.6777C154.5 15.248 155.047 14.916 155.652 14.6816C156.277 14.4277 156.922 14.2715 157.586 14.2129V17.1426C157.078 17.2402 156.678 17.4453 156.385 17.7578C156.111 18.0703 155.975 18.5098 155.975 19.0762C155.975 19.5449 156.121 19.9258 156.414 20.2188C156.727 20.4922 157.117 20.7363 157.586 20.9512V24.0859C157.254 23.9883 156.912 23.8809 156.561 23.7637C156.229 23.627 155.896 23.4805 155.564 23.3242C154.529 22.7773 153.748 22.2012 153.221 21.5957C152.713 20.9902 152.459 20.1895 152.459 19.1934ZM162.244 17.9629C161.717 17.6895 161.15 17.4844 160.545 17.3477C159.959 17.2109 159.373 17.123 158.787 17.084V14.1836C159.666 14.2227 160.477 14.3496 161.219 14.5645C161.961 14.7598 162.684 15.082 163.387 15.5312L162.244 17.9629ZM154.012 27.3086C154.402 27.582 154.861 27.8359 155.389 28.0703C155.936 28.3047 156.619 28.4219 157.439 28.4219H157.586V31.1465C157.098 31.1465 156.648 31.127 156.238 31.0879C155.828 31.0684 155.418 31.0098 155.008 30.9121C154.617 30.7949 154.217 30.6387 153.807 30.4434C153.396 30.248 152.967 29.9941 152.518 29.6816L154.012 27.3086ZM158.787 21.4199C159.373 21.6152 159.969 21.8301 160.574 22.0645C161.18 22.2988 161.727 22.5918 162.215 22.9434C162.723 23.2949 163.133 23.7344 163.445 24.2617C163.777 24.7695 163.943 25.4141 163.943 26.1953C163.943 26.957 163.807 27.6211 163.533 28.1875C163.26 28.7539 162.889 29.2422 162.42 29.6523C161.971 30.0625 161.434 30.3848 160.809 30.6191C160.184 30.8535 159.51 31.0098 158.787 31.0879V28.3047C159.451 28.1875 159.959 27.9824 160.311 27.6895C160.682 27.377 160.867 26.9668 160.867 26.459C160.867 25.9512 160.662 25.5605 160.252 25.2871C159.861 24.9941 159.373 24.7402 158.787 24.5254V21.4199ZM176.219 14.3301C177.273 14.4277 178.221 14.7109 179.061 15.1797C179.92 15.6484 180.652 16.2539 181.258 16.9961C181.863 17.7383 182.322 18.5879 182.635 19.5449C182.967 20.502 183.133 21.498 183.133 22.5332C183.133 23.002 183.104 23.4707 183.045 23.9395H172.996V21.3613H179.764C179.764 20.8535 179.676 20.3652 179.5 19.8965C179.344 19.4277 179.1 18.998 178.768 18.6074C178.455 18.1973 178.084 17.8555 177.654 17.582C177.225 17.3086 176.746 17.1426 176.219 17.084V14.3301ZM176.102 28.2461C176.316 28.2461 176.58 28.2266 176.893 28.1875C177.225 28.1289 177.566 28.041 177.918 27.9238C178.289 27.7871 178.65 27.6211 179.002 27.4258C179.373 27.2305 179.695 26.9961 179.969 26.7227L181.258 28.6855C180.613 29.4863 179.861 30.0918 179.002 30.502C178.143 30.9121 177.049 31.1172 175.721 31.1172C174.646 31.1172 173.641 30.9023 172.703 30.4727C171.766 30.0234 170.965 29.418 170.301 28.6562C169.637 27.8945 169.109 27.0059 168.719 25.9902C168.328 24.9746 168.133 23.8809 168.133 22.709C168.133 21.5957 168.309 20.541 168.66 19.5449C169.031 18.5488 169.529 17.6797 170.154 16.9375C170.779 16.1758 171.502 15.5605 172.322 15.0918C173.162 14.623 174.061 14.3594 175.018 14.3008V17.1133C174.295 17.25 173.699 17.543 173.23 17.9922C172.762 18.4414 172.391 18.959 172.117 19.5449C171.863 20.1113 171.678 20.6973 171.561 21.3027C171.463 21.9082 171.414 22.4258 171.414 22.8555C171.414 23.6172 171.502 24.3301 171.678 24.9941C171.873 25.6387 172.166 26.2051 172.557 26.6934C172.947 27.1621 173.426 27.543 173.992 27.8359C174.578 28.1094 175.281 28.2461 176.102 28.2461ZM195.232 14.4766H199.246L202.732 26.2246V31.1172H201.033L195.232 14.4766ZM207.449 14.4766H211.434L205.633 31.1172H203.934V26.2246L207.449 14.4766ZM234.695 18.7539C234.402 18.4023 233.992 18.0801 233.465 17.7871C232.957 17.4746 232.273 17.2891 231.414 17.2305V14.418C232.488 14.4766 233.406 14.7109 234.168 15.1211C234.949 15.5117 235.652 16.0879 236.277 16.8496L234.695 18.7539ZM231.414 28.2168C232.117 28.1387 232.713 27.9727 233.201 27.7188C233.709 27.4453 234.188 27.1328 234.637 26.7812L235.955 28.6855C235.35 29.4473 234.695 30.0332 233.992 30.4434C233.289 30.834 232.43 31.0586 231.414 31.1172V28.2168ZM223.24 22.7383C223.24 21.625 223.396 20.5801 223.709 19.6035C224.041 18.627 224.52 17.7676 225.145 17.0254C225.77 16.2832 226.502 15.6875 227.342 15.2383C228.201 14.7695 229.158 14.4961 230.213 14.418V17.2598C229.236 17.4746 228.455 18.0801 227.869 19.0762C227.283 20.0527 226.99 21.2441 226.99 22.6504C226.99 23.373 227.059 24.0566 227.195 24.7012C227.352 25.3262 227.566 25.8828 227.84 26.3711C228.113 26.8594 228.445 27.2695 228.836 27.6016C229.246 27.9336 229.705 28.1387 230.213 28.2168V31.1172C229.139 31.0586 228.172 30.8047 227.312 30.3555C226.453 29.8867 225.721 29.2812 225.115 28.5391C224.51 27.7773 224.041 26.8984 223.709 25.9023C223.396 24.9062 223.24 23.8516 223.24 22.7383ZM248.523 14.3301C249.578 14.4277 250.525 14.7109 251.365 15.1797C252.225 15.6484 252.957 16.2539 253.562 16.9961C254.168 17.7383 254.627 18.5879 254.939 19.5449C255.271 20.502 255.438 21.498 255.438 22.5332C255.438 23.002 255.408 23.4707 255.35 23.9395H245.301V21.3613H252.068C252.068 20.8535 251.98 20.3652 251.805 19.8965C251.648 19.4277 251.404 18.998 251.072 18.6074C250.76 18.1973 250.389 17.8555 249.959 17.582C249.529 17.3086 249.051 17.1426 248.523 17.084V14.3301ZM248.406 28.2461C248.621 28.2461 248.885 28.2266 249.197 28.1875C249.529 28.1289 249.871 28.041 250.223 27.9238C250.594 27.7871 250.955 27.6211 251.307 27.4258C251.678 27.2305 252 26.9961 252.273 26.7227L253.562 28.6855C252.918 29.4863 252.166 30.0918 251.307 30.502C250.447 30.9121 249.354 31.1172 248.025 31.1172C246.951 31.1172 245.945 30.9023 245.008 30.4727C244.07 30.0234 243.27 29.418 242.605 28.6562C241.941 27.8945 241.414 27.0059 241.023 25.9902C240.633 24.9746 240.438 23.8809 240.438 22.709C240.438 21.5957 240.613 20.541 240.965 19.5449C241.336 18.5488 241.834 17.6797 242.459 16.9375C243.084 16.1758 243.807 15.5605 244.627 15.0918C245.467 14.623 246.365 14.3594 247.322 14.3008V17.1133C246.6 17.25 246.004 17.543 245.535 17.9922C245.066 18.4414 244.695 18.959 244.422 19.5449C244.168 20.1113 243.982 20.6973 243.865 21.3027C243.768 21.9082 243.719 22.4258 243.719 22.8555C243.719 23.6172 243.807 24.3301 243.982 24.9941C244.178 25.6387 244.471 26.2051 244.861 26.6934C245.252 27.1621 245.73 27.543 246.297 27.8359C246.883 28.1094 247.586 28.2461 248.406 28.2461Z" fill="url(#paint6_linear_22_69)" />
                            <defs>
                                <filter id="filter0_d_22_69" x="0.0153809" y="7.04947" width="34.6133" height="30.6149" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                    <feOffset dy="4" />
                                    <feGaussianBlur stdDeviation="2" />
                                    <feComposite in2="hardAlpha" operator="out" />
                                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_22_69" />
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_22_69" result="shape" />
                                </filter>
                                <filter id="filter1_d_22_69" x="2.48486" y="14.0854" width="20.4503" height="12.5168" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                    <feOffset dy="4" />
                                    <feGaussianBlur stdDeviation="2" />
                                    <feComposite in2="hardAlpha" operator="out" />
                                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_22_69" />
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_22_69" result="shape" />
                                </filter>
                                <linearGradient id="paint0_linear_22_69" x1="217.433" y1="10.786" x2="217.503" y2="16.9726" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="white" />
                                    <stop offset="0.9998" stop-color="#828282" />
                                    <stop offset="0.9999" stop-color="#404040" />
                                    <stop offset="1" stop-color="#1E1E1E" />
                                </linearGradient>
                                <linearGradient id="paint1_linear_22_69" x1="217.529" y1="19.7945" x2="217.555" y2="32.0543" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="white" />
                                    <stop offset="0.0001" stop-color="white" />
                                    <stop offset="0.0002" stop-color="#A0A0A0" />
                                    <stop offset="1" stop-color="#545454" />
                                </linearGradient>
                                <linearGradient id="paint2_linear_22_69" x1="19.0837" y1="9.89223" x2="13.4059" y2="29.0787" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="white" />
                                    <stop offset="0.9999" stop-color="#3A3A3A" />
                                    <stop offset="1" stop-color="#3A3A3A" />
                                </linearGradient>
                                <linearGradient id="paint3_linear_22_69" x1="12.5472" y1="9.8237" x2="4.34472" y2="13.5255" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="white" />
                                    <stop offset="1" stop-color="#545454" />
                                </linearGradient>
                                <linearGradient id="paint4_linear_22_69" x1="23.6619" y1="11.7871" x2="34.6343" y2="23.976" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="white" />
                                    <stop offset="0.9999" stop-color="#3A3A3A" />
                                    <stop offset="1" stop-color="#3A3A3A" />
                                </linearGradient>
                                <linearGradient id="paint5_linear_22_69" x1="14.4925" y1="11.7248" x2="11.0223" y2="20.3503" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="white" />
                                    <stop offset="0.9999" stop-color="#3A3A3A" />
                                    <stop offset="1" stop-color="#3A3A3A" />
                                </linearGradient>
                                <linearGradient id="paint6_linear_22_69" x1="143" y1="0" x2="143" y2="38" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="white" />
                                    <stop offset="1" stop-color="#545454" />
                                </linearGradient>
                            </defs>
                        </svg>

                    </a>
                </div>
                <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active text-white" aria-current="page" href="home.php">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="devis.php?steps=0">Devis</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="gallery.php">Galerie</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="actualite.php">Actualité</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="contact.php">Contacts</a>
                        </li>

                        <?php
                        if (isset($_SESSION['user'])) { ?>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="logout.php">Deconnection</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="../admin/home.php">Admin</a>
                            </li>
                        <?php } else { ?>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="login.php">Connection</a>
                            </li>
                            <!-- <li class="nav-item">
                                <a class="nav-link text-white" href="redgister.php">Inscription</a>
                            </li> -->
                        <?php }
                        ?>

                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="container my-5">