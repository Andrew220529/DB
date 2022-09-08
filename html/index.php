<?php echo "yudi"; 

try {
    // host=XXXの部分のXXXにはmysqlのサービス名を指定します
    $dsn = 'mysql:host=mysql;dbname=test;';
    $db = new PDO($dsn, 'test', 'test');

    $sql = 'SELECT * FROM matrix';
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    var_dump($result);
    echo "成功";
} catch (PDOException $e) {
    echo $e->getMessage();
    echo "しっぱい";
    exit;
}

?>