<style>
    
    .value {
        color: blue;
        font-size: 18px;
        font-weight: bold;
    }

    table {
        font-size: 12px;
        text-align: center;
        letter-spacing: normal;
        line-height: normal;
        overflow: scroll;
    }

    table p {
        margin: 3px;
        
        text-align: center;
        /* user-select: none; */
        color: black;
    }

    h3 {
        /* text-align: center; */
        user-select: none;
    }

    .spoiler h3:hover {
        color: rgb(119, 119, 172);
    }

    hr {
        color: black;
        background-color: black;
    }
    .box { 
        overflow: auto;
    } 
</style>
</head>
<body>


<table border="1">


</table>



<div class='news-text box'>
<p>Приёмная комиссия начала приём документов  у поступающих  с 01 июня 2021 г. Режим работы: ежедневно с понедельника по пятницу с 08.30 до 16.30,  по субботам с 08.30 до 12.00. Воскресенье – выходной день.</p>

   <div class="main-li"><a href="/sites/default/files/abiturient/number_documents_for_abiturient.pdf"><i class="fas fa-file-pdf"></i>&nbsp;Перечень документов, для поступления на 1 курс ГАПОУ СО «СКСМГС»</a></div>
        <p>Уважаемые абитуриенты – 2021!</p>

            <p>ГАПОУ СО «Саратовский колледж строительства мостов и гидротехнических сооружений» предлагает вам поступить на перспективные и востребованные на рынках труда Саратовской области и Российской Федерации специальности:
                <ul>
                   <li><a href="https://abiturient.sksmgs.ru/sz.html">
                08.02.01 «Строительство и эксплуатация зданий и сооружений»</a></li>
        <li><a href="https://abiturient.sksmgs.ru/er.html">
                23.02.04 «Техническая эксплуатация подъёмно-транспортных, строительных, дорожных машин и оборудования»
            </a>
        </li>
        <li><a href="https://abiturient.sksmgs.ru/sm.html">
                08.02.02 «Строительство и эксплуатация инженерных сооружений»
            </a></li>
        <li><a href="https://abiturient.sksmgs.ru/sp.html">
                35.02.12 «Садово-парковое и ландшафтное строительство»
            </a></li>
        <li><a href="https://abiturient.sksmgs.ru/zo.html">
                21.02.05 «Земельно-имущественные отношения»
            </a></li>
        <li><a href="https://abiturient.sksmgs.ru/economy.html">
                38.02.01 «Экономика и бухгалтерский учёт»
            </a></li>
                </ul>
            </p>
<!-- ================== table =================== -->




<div class="spoiler">
    <ul>
        <div class="spoiler"><label for="check1"><a class="main-li">&nbsp;<h3>Количество поданных заявлений
                        абитуриентами
                        на ОЧНУЮ ФОРМУ ОБУЧЕНИЯ

                        <?php
                                                                            echo 'на '. date('d.m.Y г.');
                                                                            ?></h3></a></label><input type="checkbox"
                   id="check1"
                   hidden>
            <div class="box">
                <ul>
 <table border="1" cellspacing="0" cellpadding="0" width="0">
    <tbody>
        <tr>
        
            <td width="70" rowspan="3">
                <p >
                    <strong>Код</strong>
                </p>
            </td>
            <td width="234" rowspan="3">
                <p >
                    <strong>Специальность</strong>
                </p>
            </td>
            <td width="57" rowspan="3">
                <p >
                    база
                </p>
            </td>
            <td width="85" rowspan="3">
                <p >
                    <strong>срок</strong>
                </p>
                <p >
                    <strong>обучения</strong>
                </p>
            </td>
            <td width="311" colspan="3">
                <p >
                    <strong>За счет средств бюджета</strong>
                </p>
            </td>
            <td width="311" colspan="3">
                <p >
                    <strong>С оплатой стоимости обучения</strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="132" rowspan="2">
                <p >
                    <strong>Контрольные цифры приема</strong>
                </p>
            </td>
            <td width="179" colspan="2">
                <p >
                    <strong>подано заявлений</strong>
                </p>
            </td>
            <td width="132" rowspan="2">
                <p >
                    <strong>Контрольные цифры приема</strong>
                </p>
            </td>
            <td width="179" colspan="2">
                <p >
                    <strong>подано заявлений</strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="94">
                <p >
                    <strong>оригинал</strong>
                </p>
            </td>
            <td width="85">
                <p >
                    <strong>копия</strong>
                </p>
            </td>
            <td width="85">
                <p >
                    <strong>оригинал</strong>
                </p>
            </td>
            <td width="94">
                <p >
                    <strong>копия</strong>
                </p>
            </td>
        </tr>


<?php
$connect = mysqli_connect('127.0.0.1', 'root', '', 'abiturient_table'); 

if(!$connect) 
die ("ERROR!!!");

if (!mysqli_set_charset($connect, "utf8mb4")) {
    exit();
} 


$values = mysqli_query($connect, "SELECT * FROM `table_och`");
$values = mysqli_fetch_all($values);
foreach ($values as $value) {
    ?>
    
    <tr> 
        <td><p><strong><?= $value[1] ?></strong></p></td>
        <td><p><?= $value[2] ?></p></td>
        <td><p><strong><?= $value[3] ?></strong></p></td>
        <td><p><strong><?= $value[4] ?></strong></p></td>
        <td><p><strong><?= $value[5] ?></strong></p></td>
        <td><p><strong class="value"><?= $value[6] ?></strong></p></td>
        <td><p><strong class="value"><?= $value[7] ?></strong></p></td>
        <td><p><strong><?= $value[8] ?></strong></p></td>
        <td><p><strong class="value"><?= $value[9] ?></strong></p></td>
        <td><p><strong class="value"><?= $value[10] ?></strong></p></td>
    </tr>
    
    <?php
    }
    ?>

       

                    </tbody>
                </table>
                </ul>
            </div>
        </div>
    </ul>
</div>

<hr>



<div class="spoiler">
    <ul>
        <div class="spoiler"><label for="check2"><a class="main-li">&nbsp;<h3>Количество поданных заявлений
                        абитуриентами
                        на ЗАОЧНУЮ ФОРМУ ОБУЧЕНИЯ

                        <?php
                                                                            echo 'на '. date('d.m.Y г.');
                                                                            ?></h3></a></label><input type="checkbox"
                   id="check2"
                   hidden>
            <div class="box">
                <ul>
                    <table border="1" cellspacing="0" cellpadding="0" width="0">
                        <tbody>
                            <tr>
                                <td width="70" rowspan="3">
                                    <p >
                                        <strong>Код</strong>
                                    </p>
                                </td>
                                <td width="233" rowspan="3">
                                    <p >
                                        <strong>Специальность</strong>
                                    </p>
                                </td>
                                <td width="66" rowspan="3">
                                    <p >
                                        <strong>база</strong>
                                    </p>
                                </td>
                                <td width="79" rowspan="3">
                                    <p >
                                        <strong>срок</strong>
                                    </p>
                                    <p >
                                        <strong>обучения</strong>
                                    </p>
                                </td>
                                <td width="310" colspan="3">
                                    <p >
                                        <strong>За счет средств бюджета</strong>
                                    </p>
                                </td>
                                <td width="310" colspan="3">
                                    <p >
                                        <strong>С оплатой стоимости обучения</strong>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td width="132" rowspan="2">
                                    <p >
                                        <strong>Контрольные цифры приема</strong>
                                    </p>
                                </td>
                                <td width="178" colspan="2">
                                    <p >
                                        <strong>подано заявлений</strong>
                                    </p>
                                </td>
                                <td width="132" rowspan="2">
                                    <p >
                                        <strong>Контрольные цифры приема</strong>
                                    </p>
                                </td>
                                <td width="178" colspan="2">
                                    <p >
                                        <strong>подано заявлений</strong>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td width="94">
                                    <p >
                                        <strong>оригинал</strong>
                                    </p>
                                </td>
                                <td width="84">
                                    <p >
                                        <strong>копия</strong>
                                    </p>
                                </td>
                                <td width="85">
                                    <p >
                                        <strong>оригинал</strong>
                                    </p>
                                </td>
                                <td width="93">
                                    <p >
                                        <strong>копия</strong>
                                    </p>
                                </td>
                            </tr>
                            <?php
                            $values = mysqli_query($connect, "SELECT * FROM `table_zaoch`");
                            $values = mysqli_fetch_all($values);
                            foreach ($values as $value) {
                                ?>
                                
                                <tr> 
                                    <td><p><strong><?= $value[1] ?></strong></p></td>
                                    <td><p><?= $value[2] ?></p></td>
                                    <td><p><strong><?= $value[3] ?></strong></p></td>
                                    <td><p><strong><?= $value[4] ?></strong></p></td>
                                    <td><p><strong><?= $value[5] ?></strong></p></td>
                                    <td><p><strong class="value"><?= $value[6] ?></strong></p></td>
                                    <td><p><strong class="value"><?= $value[7] ?></strong></p></td>
                                    <td><p><strong><?= $value[8] ?></strong></p></td>
                                    <td><p><strong class="value"><?= $value[9] ?></strong></p></td>
                                    <td><p><strong class="value"><?= $value[10] ?></strong></p></td>
                                </tr>
                                <?php
                                }
                                ?>
                            
                        </tbody>
                    </table>
                </ul>
            </div>
        </div>
    </ul>
</div>

<hr>

<br>




<!-- ================== /table ===================-->












<br>
</div>
<div id="vk_post_-196747666_96"></div>
<script type="text/javascript" src="https://vk.com/js/api/openapi.js?169"></script>
<script type="text/javascript">
  (function() {
      VK.Widgets.Post("vk_post_-196747666_96", -196747666, 96, '5_z6kGvLO_OG1HJgKAYfXswbhEaj');
    }());
</script>  




