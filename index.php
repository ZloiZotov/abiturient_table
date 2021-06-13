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
        <!-- ================== table =================== -->
        <div class="spoiler">
            <ul>
                <div class="spoiler"><label for="check1"><a class="main-li">&nbsp;<h3>Количество поданных заявлений
                                абитуриентами
                                на ОЧНУЮ ФОРМУ ОБУЧЕНИЯ

                                <?php
                                echo 'на ' . date('d.m.Y г.');
                                ?></h3></a></label><input type="checkbox" id="check1" hidden>
                    <div class="box">
                        <ul>
                            <table border="1" cellspacing="0" cellpadding="0" width="0">
                                <tbody>
                                    <tr>

                                        <td width="70" rowspan="3">
                                            <p>
                                                <strong>Код</strong>
                                            </p>
                                        </td>
                                        <td width="234" rowspan="3">
                                            <p>
                                                <strong>Специальность</strong>
                                            </p>
                                        </td>
                                        <td width="57" rowspan="3">
                                            <p>
                                                база
                                            </p>
                                        </td>
                                        <td width="85" rowspan="3">
                                            <p>
                                                <strong>срок</strong>
                                            </p>
                                            <p>
                                                <strong>обучения</strong>
                                            </p>
                                        </td>
                                        <td width="311" colspan="3">
                                            <p>
                                                <strong>За счет средств бюджета</strong>
                                            </p>
                                        </td>
                                        <td width="311" colspan="3">
                                            <p>
                                                <strong>С оплатой стоимости обучения</strong>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="132" rowspan="2">
                                            <p>
                                                <strong>Контрольные цифры приема</strong>
                                            </p>
                                        </td>
                                        <td width="179" colspan="2">
                                            <p>
                                                <strong>подано заявлений</strong>
                                            </p>
                                        </td>
                                        <td width="132" rowspan="2">
                                            <p>
                                                <strong>Контрольные цифры приема</strong>
                                            </p>
                                        </td>
                                        <td width="179" colspan="2">
                                            <p>
                                                <strong>подано заявлений</strong>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="94">
                                            <p>
                                                <strong>оригинал</strong>
                                            </p>
                                        </td>
                                        <td width="85">
                                            <p>
                                                <strong>копия</strong>
                                            </p>
                                        </td>
                                        <td width="85">
                                            <p>
                                                <strong>оригинал</strong>
                                            </p>
                                        </td>
                                        <td width="94">
                                            <p>
                                                <strong>копия</strong>
                                            </p>
                                        </td>
                                    </tr>
                                    <?php
                                    $connect = mysqli_connect('127.0.0.1', 'root', 'root', 'abiturient_table'); 
                                

                                    if (!$connect)
                                        die("ERROR!!!");

                                    if (!mysqli_set_charset($connect, "utf8mb4")) {
                                        exit();
                                    }

                                    $values = mysqli_query($connect, "SELECT * FROM `table_och`");
                                    $values = mysqli_fetch_all($values);
                                    foreach ($values as $value) {

                                        $digit_priem_budget += $value[5];
                                        $budget_orig += $value[6];
                                        $budget_copy += $value[7];
                                        $digit_priem_commerce += $value[8];
                                        $commerce_orig += $value[9];
                                        $commerce_copy += $value[10];
                                    ?>

                                        <tr>
                                            <td>
                                                <p><strong><?= $value[1] ?></strong></p>
                                            </td>
                                            <td>
                                                <p><?= $value[2] ?></p>
                                            </td>
                                            <td>
                                                <p><strong><?= $value[3] ?></strong></p>
                                            </td>
                                            <td>
                                                <p><strong><?= $value[4] ?></strong></p>
                                            </td>
                                            <td>
                                                <p><strong><?= $value[5] ?></strong></p>
                                            </td>
                                            <td>
                                                <p><strong class="value"><?= $value[6] ?></strong></p>
                                            </td>
                                            <td>
                                                <p><strong class="value"><?= $value[7] ?></strong></p>
                                            </td>
                                            <td>
                                                <p><strong><?= $value[8] ?></strong></p>
                                            </td>
                                            <td>
                                                <p><strong class="value"><?= $value[9] ?></strong></p>
                                            </td>
                                            <td>
                                                <p><strong class="value"><?= $value[10] ?></strong></p>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                    ?>

                                    <tr>
                                        <td>
                                            <p><strong></strong></p>
                                        </td>
                                        <td>
                                            <p>Итого</p>
                                        </td>
                                        <td>
                                            <p><strong></strong></p>
                                        </td>
                                        <td>
                                            <p><strong></strong></p>
                                        </td>
                                        <td>
                                            <p><strong><?= $digit_priem_budget ?></strong></p>
                                        </td>
                                        <td>
                                            <p><strong class="value"><?= $budget_orig ?></strong></p>
                                        </td>
                                        <td>
                                            <p><strong class="value"><?= $budget_copy ?></strong></p>
                                        </td>
                                        <td>
                                            <p><strong><?= $digit_priem_commerce ?></strong></p>
                                        </td>
                                        <td>
                                            <p><strong class="value"><?= $commerce_orig ?></strong></p>
                                        </td>
                                        <td>
                                            <p><strong class="value"><?= $commerce_copy ?> </strong></p>
                                        </td>
                                    </tr>

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
                                echo 'на ' . date('d.m.Y г.');
                                ?></h3></a></label><input type="checkbox" id="check2" hidden>
                    <div class="box">
                        <ul>
                            <table border="1" cellspacing="0" cellpadding="0" width="0">
                                <tbody>
                                    <tr>
                                        <td width="70" rowspan="3">
                                            <p>
                                                <strong>Код</strong>
                                            </p>
                                        </td>
                                        <td width="233" rowspan="3">
                                            <p>
                                                <strong>Специальность</strong>
                                            </p>
                                        </td>
                                        <td width="66" rowspan="3">
                                            <p>
                                                <strong>база</strong>
                                            </p>
                                        </td>
                                        <td width="79" rowspan="3">
                                            <p>
                                                <strong>срок</strong>
                                            </p>
                                            <p>
                                                <strong>обучения</strong>
                                            </p>
                                        </td>
                                        <td width="310" colspan="3">
                                            <p>
                                                <strong>За счет средств бюджета</strong>
                                            </p>
                                        </td>
                                        <td width="310" colspan="3">
                                            <p>
                                                <strong>С оплатой стоимости обучения</strong>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="132" rowspan="2">
                                            <p>
                                                <strong>Контрольные цифры приема</strong>
                                            </p>
                                        </td>
                                        <td width="178" colspan="2">
                                            <p>
                                                <strong>подано заявлений</strong>
                                            </p>
                                        </td>
                                        <td width="132" rowspan="2">
                                            <p>
                                                <strong>Контрольные цифры приема</strong>
                                            </p>
                                        </td>
                                        <td width="178" colspan="2">
                                            <p>
                                                <strong>подано заявлений</strong>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="94">
                                            <p>
                                                <strong>оригинал</strong>
                                            </p>
                                        </td>
                                        <td width="84">
                                            <p>
                                                <strong>копия</strong>
                                            </p>
                                        </td>
                                        <td width="85">
                                            <p>
                                                <strong>оригинал</strong>
                                            </p>
                                        </td>
                                        <td width="93">
                                            <p>
                                                <strong>копия</strong>
                                            </p>
                                        </td>
                                    </tr>
                                    <?php
                                    $values = mysqli_query($connect, "SELECT * FROM `table_zaoch`");
                                    $values = mysqli_fetch_all($values);
                                    foreach ($values as $value) {
                                        $z_digit_priem_budget += $value[5];
                                        $z_budget_orig += $value[6];
                                        $z_budget_copy += $value[7];
                                        $z_digit_priem_commerce += $value[8];
                                        $z_commerce_orig += $value[9];
                                        $z_commerce_copy += $value[10];
                                    ?>

                                        <tr>
                                            <td>
                                                <p><strong><?= $value[1] ?></strong></p>
                                            </td>
                                            <td>
                                                <p><?= $value[2] ?></p>
                                            </td>
                                            <td>
                                                <p><strong><?= $value[3] ?></strong></p>
                                            </td>
                                            <td>
                                                <p><strong><?= $value[4] ?></strong></p>
                                            </td>
                                            <td>
                                                <p><strong><?= $value[5] ?></strong></p>
                                            </td>
                                            <td>
                                                <p><strong class="value"><?= $value[6] ?></strong></p>
                                            </td>
                                            <td>
                                                <p><strong class="value"><?= $value[7] ?></strong></p>
                                            </td>
                                            <td>
                                                <p><strong><?= $value[8] ?></strong></p>
                                            </td>
                                            <td>
                                                <p><strong class="value"><?= $value[9] ?></strong></p>
                                            </td>
                                            <td>
                                                <p><strong class="value"><?= $value[10] ?></strong></p>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                    <tr>
                                        <td>
                                            <p><strong></strong></p>
                                        </td>
                                        <td>
                                            <p>Итого</p>
                                        </td>
                                        <td>
                                            <p><strong></strong></p>
                                        </td>
                                        <td>
                                            <p><strong></strong></p>
                                        </td>
                                        <td>
                                            <p><strong><?= $z_digit_priem_budget ?></strong></p>
                                        </td>
                                        <td>
                                            <p><strong class="value"><?= $z_budget_orig ?></strong></p>
                                        </td>
                                        <td>
                                            <p><strong class="value"><?= $z_budget_copy ?></strong></p>
                                        </td>
                                        <td>
                                            <p><strong><?= $z_digit_priem_commerce ?></strong></p>
                                        </td>
                                        <td>
                                            <p><strong class="value"><?= $z_commerce_orig ?></strong></p>
                                        </td>
                                        <td>
                                            <p><strong class="value"><?= $z_commerce_copy ?> </strong></p>
                                        </td>
                                    </tr>
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