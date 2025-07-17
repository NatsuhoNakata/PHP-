<?php
// Q1 変数と文字列
$name = '「中田」';
echo  '私の名前は' . $name . 'です。';

// Q2 四則演算
$num = 5 * 4;
echo $num . "\n";

$half = $num / 2;
echo $half . "\n";

// Q3 日付操作
echo '現在の時刻は ' . date("Y-m-d H:i:s") . ' です。';

// Q4 条件分岐-1 if文
$device = "windows";  
$os = "";  

if ($device === "windows") {
    $os = "windows";
} elseif ($device === "mac") {
    $os = "mac";
}

if ($os !== "") {
    echo '使用OSは、' . $os . 'です。';
} else {
    echo 'どちらでもありません。';
}


// Q5 条件分岐-2 三項演算子
$age = 20; 

echo ($age < 18) ? "未成年です。" : "成人です。";

// Q6 配列
$kanto = ["東京都", "神奈川県", "栃木県", "千葉県", "埼玉県", "茨城県", "群馬県"];

echo $kanto[2] . "と" . $kanto[3] . "は関東地方の都道府県です。";


// Q7 連想配列-1
$kanto = [
    '東京都'   => '新宿区',
    '神奈川県' => '横浜市',
    '千葉県'   => '千葉市',
    '埼玉県'   => 'さいたま市',
    '茨城県'   => '水戸市',
    '栃木県'   => '宇都宮市',
    '群馬県'   => '前橋市',
];

foreach ($kanto as $capital) {
    echo $capital . "\n";
}

// Q8 連想配列-2
if (isset($kanto["埼玉県"])) {
    echo "埼玉県の県庁所在地は、" . $kanto["埼玉県"] . "です。";
}

// Q9 連想配列-3
$prefectures = [
    "東京都"   => "新宿区",
    "神奈川県" => "横浜市",
    "千葉県"   => "千葉市",
    "埼玉県"   => "さいたま市",
    "茨城県"   => "水戸市",
    "栃木県"   => "宇都宮市",
    "群馬県"   => "前橋市",
    "大阪府"   => "大阪市",     
    "北海道"   => "札幌市"      
];

$kanto = ['東京都', '神奈川県', '千葉県', '埼玉県', '茨城県', '栃木県', '群馬県'];

foreach ($prefectures as $name => $capital) {
    if (in_array($name, $kanto)) {
        echo $name . "の県庁所在地は、" . $capital . です。\n";
    } else {
        echo $name . "は関東地方ではありません。\n";
    }
}

// Q10 関数-1
function hello($name) {
    return $name . 'さん、こんにちは。';
}

echo hello('金谷') . "\n";
echo hello('安藤') . "\n";

// Q11 関数-2
function calcTaxInPrice($price) {
    return $price * 1.10; 
}

$price = 1000;

$taxInPrice = calcTaxInPrice($price);

echo $price . 'の商品の税込価格は' . $taxInPrice . '円です。';

// Q12 関数とif文
function distinguishNum($num) {
    if ($num % 2 === 0) {
        return $num . 'は偶数です。';
    } else {
        return $num . 'は奇数です。';
    }
}

echo distinguishNum(11) . "\n";
echo distinguishNum(24) . "\n";

// Q13 関数とswitch文
function evaluateGrade($grade) {
    switch ($grade) {
        case 'A':
        case 'B':
            return '合格です。';
        case 'C':
            return '合格ですが追加課題があります。';
        case 'D':
            return '不合格です。';
        default:
            return '判定不明です。講師に問い合わせてください。';
    }
}

echo evaluateGrade('A') . "\n";
echo evaluateGrade('E') . "\n";

?>