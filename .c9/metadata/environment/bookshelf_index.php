{"filter":false,"title":"bookshelf_index.php","tooltip":"/bookshelf_index.php","undoManager":{"mark":100,"position":100,"stack":[[{"start":{"row":36,"column":40},"end":{"row":37,"column":0},"action":"insert","lines":["",""],"id":1459},{"start":{"row":37,"column":0},"end":{"row":37,"column":8},"action":"insert","lines":["        "]},{"start":{"row":37,"column":8},"end":{"row":37,"column":9},"action":"insert","lines":["m"]},{"start":{"row":37,"column":9},"end":{"row":37,"column":10},"action":"insert","lines":["y"]},{"start":{"row":37,"column":10},"end":{"row":37,"column":11},"action":"insert","lines":["s"]},{"start":{"row":37,"column":11},"end":{"row":37,"column":12},"action":"insert","lines":["q"]}],[{"start":{"row":37,"column":12},"end":{"row":37,"column":13},"action":"insert","lines":["l"],"id":1460}],[{"start":{"row":37,"column":8},"end":{"row":37,"column":13},"action":"remove","lines":["mysql"],"id":1461},{"start":{"row":37,"column":8},"end":{"row":37,"column":25},"action":"insert","lines":["mysqli_stmt_close"]}],[{"start":{"row":37,"column":25},"end":{"row":37,"column":27},"action":"insert","lines":["()"],"id":1462}],[{"start":{"row":37,"column":26},"end":{"row":37,"column":27},"action":"insert","lines":["$"],"id":1463},{"start":{"row":37,"column":27},"end":{"row":37,"column":28},"action":"insert","lines":["s"]},{"start":{"row":37,"column":28},"end":{"row":37,"column":29},"action":"insert","lines":["t"]},{"start":{"row":37,"column":29},"end":{"row":37,"column":30},"action":"insert","lines":["a"]},{"start":{"row":37,"column":30},"end":{"row":37,"column":31},"action":"insert","lines":["t"]},{"start":{"row":37,"column":31},"end":{"row":37,"column":32},"action":"insert","lines":["e"]},{"start":{"row":37,"column":32},"end":{"row":37,"column":33},"action":"insert","lines":["m"]},{"start":{"row":37,"column":33},"end":{"row":37,"column":34},"action":"insert","lines":["e"]},{"start":{"row":37,"column":34},"end":{"row":37,"column":35},"action":"insert","lines":["n"]},{"start":{"row":37,"column":35},"end":{"row":37,"column":36},"action":"insert","lines":["t"]}],[{"start":{"row":37,"column":37},"end":{"row":37,"column":38},"action":"insert","lines":[";"],"id":1464}],[{"start":{"row":38,"column":4},"end":{"row":38,"column":8},"action":"remove","lines":["    "],"id":1465},{"start":{"row":38,"column":0},"end":{"row":38,"column":4},"action":"remove","lines":["    "]},{"start":{"row":37,"column":38},"end":{"row":38,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":196,"column":16},"end":{"row":196,"column":17},"action":"remove","lines":["}"],"id":1466}],[{"start":{"row":196,"column":16},"end":{"row":196,"column":17},"action":"insert","lines":["{"],"id":1467}],[{"start":{"row":29,"column":32},"end":{"row":29,"column":33},"action":"insert","lines":["/"],"id":1468}],[{"start":{"row":34,"column":26},"end":{"row":34,"column":27},"action":"insert","lines":["i"],"id":1469}],[{"start":{"row":85,"column":0},"end":{"row":99,"column":39},"action":"remove","lines":["    // 未読数のカウント","    $sql = 'SELECT COUNT(*) as count FROM books where status = \"unread\"';","    $result = mysqli_query($database, $sql);","    $record = mysqli_fetch_assoc($result);","    $count_unread = $record['count'];","    // 読中数のカウント","    $sql = 'SELECT COUNT(*) as count FROM books where status = \"reading\"';","    $result = mysqli_query($database, $sql);","    $record = mysqli_fetch_assoc($result);","    $count_reading = $record['count'];","    // 読了数のカウント","    $sql = 'SELECT COUNT(*) as count FROM books where status = \"finished\"';","    $result = mysqli_query($database, $sql);","    $record = mysqli_fetch_assoc($result);","    $count_finished = $record['count'];"],"id":1470}],[{"start":{"row":84,"column":4},"end":{"row":85,"column":0},"action":"remove","lines":["",""],"id":1471},{"start":{"row":84,"column":0},"end":{"row":84,"column":4},"action":"remove","lines":["    "]},{"start":{"row":83,"column":4},"end":{"row":84,"column":0},"action":"remove","lines":["",""]},{"start":{"row":83,"column":0},"end":{"row":83,"column":4},"action":"remove","lines":["    "]},{"start":{"row":82,"column":44},"end":{"row":83,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":64,"column":5},"end":{"row":65,"column":0},"action":"insert","lines":["",""],"id":1472},{"start":{"row":65,"column":0},"end":{"row":65,"column":4},"action":"insert","lines":["    "]},{"start":{"row":65,"column":4},"end":{"row":66,"column":0},"action":"insert","lines":["",""]},{"start":{"row":66,"column":0},"end":{"row":66,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":66,"column":4},"end":{"row":80,"column":39},"action":"insert","lines":["    // 未読数のカウント","    $sql = 'SELECT COUNT(*) as count FROM books where status = \"unread\"';","    $result = mysqli_query($database, $sql);","    $record = mysqli_fetch_assoc($result);","    $count_unread = $record['count'];","    // 読中数のカウント","    $sql = 'SELECT COUNT(*) as count FROM books where status = \"reading\"';","    $result = mysqli_query($database, $sql);","    $record = mysqli_fetch_assoc($result);","    $count_reading = $record['count'];","    // 読了数のカウント","    $sql = 'SELECT COUNT(*) as count FROM books where status = \"finished\"';","    $result = mysqli_query($database, $sql);","    $record = mysqli_fetch_assoc($result);","    $count_finished = $record['count'];"],"id":1473}],[{"start":{"row":66,"column":4},"end":{"row":66,"column":8},"action":"remove","lines":["    "],"id":1474}],[{"start":{"row":130,"column":55},"end":{"row":130,"column":62},"action":"remove","lines":["reading"],"id":1475},{"start":{"row":130,"column":55},"end":{"row":130,"column":56},"action":"insert","lines":["u"]},{"start":{"row":130,"column":56},"end":{"row":130,"column":57},"action":"insert","lines":["n"]},{"start":{"row":130,"column":57},"end":{"row":130,"column":58},"action":"insert","lines":["r"]},{"start":{"row":130,"column":58},"end":{"row":130,"column":59},"action":"insert","lines":["e"]},{"start":{"row":130,"column":59},"end":{"row":130,"column":60},"action":"insert","lines":["a"]},{"start":{"row":130,"column":60},"end":{"row":130,"column":61},"action":"insert","lines":["d"]}],[{"start":{"row":140,"column":55},"end":{"row":140,"column":62},"action":"remove","lines":["reading"],"id":1476},{"start":{"row":140,"column":55},"end":{"row":140,"column":56},"action":"insert","lines":["f"]},{"start":{"row":140,"column":56},"end":{"row":140,"column":57},"action":"insert","lines":["i"]},{"start":{"row":140,"column":57},"end":{"row":140,"column":58},"action":"insert","lines":["n"]},{"start":{"row":140,"column":58},"end":{"row":140,"column":59},"action":"insert","lines":["i"]},{"start":{"row":140,"column":59},"end":{"row":140,"column":60},"action":"insert","lines":["s"]},{"start":{"row":140,"column":60},"end":{"row":140,"column":61},"action":"insert","lines":["h"]},{"start":{"row":140,"column":61},"end":{"row":140,"column":62},"action":"insert","lines":["e"]},{"start":{"row":140,"column":62},"end":{"row":140,"column":63},"action":"insert","lines":["d"]}],[{"start":{"row":176,"column":93},"end":{"row":176,"column":94},"action":"remove","lines":[">"],"id":1477},{"start":{"row":176,"column":92},"end":{"row":176,"column":93},"action":"remove","lines":["r"]},{"start":{"row":176,"column":91},"end":{"row":176,"column":92},"action":"remove","lines":["b"]},{"start":{"row":176,"column":90},"end":{"row":176,"column":91},"action":"remove","lines":["<"]}],[{"start":{"row":179,"column":94},"end":{"row":179,"column":95},"action":"remove","lines":[">"],"id":1478},{"start":{"row":179,"column":93},"end":{"row":179,"column":94},"action":"remove","lines":["r"]},{"start":{"row":179,"column":92},"end":{"row":179,"column":93},"action":"remove","lines":["b"]},{"start":{"row":179,"column":91},"end":{"row":179,"column":92},"action":"remove","lines":["<"]}],[{"start":{"row":182,"column":95},"end":{"row":182,"column":96},"action":"remove","lines":[">"],"id":1479},{"start":{"row":182,"column":94},"end":{"row":182,"column":95},"action":"remove","lines":["r"]},{"start":{"row":182,"column":93},"end":{"row":182,"column":94},"action":"remove","lines":["b"]},{"start":{"row":182,"column":92},"end":{"row":182,"column":93},"action":"remove","lines":["<"]}],[{"start":{"row":159,"column":13},"end":{"row":161,"column":0},"action":"remove","lines":["   }","            }",""],"id":1480},{"start":{"row":159,"column":12},"end":{"row":159,"column":13},"action":"remove","lines":[" "]},{"start":{"row":159,"column":8},"end":{"row":159,"column":12},"action":"remove","lines":["    "]},{"start":{"row":159,"column":4},"end":{"row":159,"column":8},"action":"remove","lines":["    "]}],[{"start":{"row":159,"column":0},"end":{"row":159,"column":4},"action":"remove","lines":["    "],"id":1481},{"start":{"row":158,"column":48},"end":{"row":159,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":158,"column":48},"end":{"row":159,"column":0},"action":"remove","lines":["",""],"id":1482}],[{"start":{"row":191,"column":16},"end":{"row":191,"column":17},"action":"remove","lines":["{"],"id":1483}],[{"start":{"row":191,"column":16},"end":{"row":191,"column":17},"action":"insert","lines":["}"],"id":1484}],[{"start":{"row":23,"column":29},"end":{"row":24,"column":0},"action":"insert","lines":["",""],"id":1488},{"start":{"row":24,"column":0},"end":{"row":24,"column":4},"action":"insert","lines":["    "]},{"start":{"row":24,"column":4},"end":{"row":25,"column":0},"action":"insert","lines":["",""]},{"start":{"row":25,"column":0},"end":{"row":25,"column":4},"action":"insert","lines":["    "]},{"start":{"row":25,"column":4},"end":{"row":26,"column":0},"action":"insert","lines":["",""]},{"start":{"row":26,"column":0},"end":{"row":26,"column":4},"action":"insert","lines":["    "]},{"start":{"row":26,"column":4},"end":{"row":27,"column":0},"action":"insert","lines":["",""]},{"start":{"row":27,"column":0},"end":{"row":27,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":25,"column":4},"end":{"row":25,"column":5},"action":"insert","lines":["/"],"id":1489},{"start":{"row":25,"column":5},"end":{"row":25,"column":6},"action":"insert","lines":["/"]}],[{"start":{"row":25,"column":6},"end":{"row":25,"column":7},"action":"insert","lines":[" "],"id":1490}],[{"start":{"row":25,"column":6},"end":{"row":25,"column":7},"action":"remove","lines":[" "],"id":1491},{"start":{"row":25,"column":6},"end":{"row":25,"column":7},"action":"insert","lines":["\\"]}],[{"start":{"row":25,"column":7},"end":{"row":26,"column":0},"action":"insert","lines":["",""],"id":1492},{"start":{"row":26,"column":0},"end":{"row":26,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":26,"column":0},"end":{"row":26,"column":4},"action":"remove","lines":["    "],"id":1493},{"start":{"row":25,"column":7},"end":{"row":26,"column":0},"action":"remove","lines":["",""]},{"start":{"row":25,"column":6},"end":{"row":25,"column":7},"action":"remove","lines":["\\"]}],[{"start":{"row":25,"column":6},"end":{"row":26,"column":0},"action":"insert","lines":["",""],"id":1494},{"start":{"row":26,"column":0},"end":{"row":26,"column":4},"action":"insert","lines":["    "]},{"start":{"row":26,"column":4},"end":{"row":26,"column":5},"action":"insert","lines":["/"]},{"start":{"row":26,"column":5},"end":{"row":26,"column":6},"action":"insert","lines":["/"]}],[{"start":{"row":26,"column":6},"end":{"row":26,"column":24},"action":"insert","lines":["submit_delete_book"],"id":1496}],[{"start":{"row":25,"column":6},"end":{"row":25,"column":10},"action":"insert","lines":["本の削除"],"id":1497}],[{"start":{"row":25,"column":10},"end":{"row":25,"column":15},"action":"insert","lines":["昨日の追加"],"id":1498}],[{"start":{"row":26,"column":4},"end":{"row":26,"column":5},"action":"insert","lines":["i"],"id":1499},{"start":{"row":26,"column":5},"end":{"row":26,"column":6},"action":"insert","lines":["f"]}],[{"start":{"row":26,"column":6},"end":{"row":26,"column":7},"action":"insert","lines":[" "],"id":1500}],[{"start":{"row":26,"column":7},"end":{"row":26,"column":9},"action":"insert","lines":["()"],"id":1501}],[{"start":{"row":26,"column":8},"end":{"row":26,"column":9},"action":"insert","lines":["$"],"id":1502},{"start":{"row":26,"column":9},"end":{"row":26,"column":10},"action":"insert","lines":["_"]}],[{"start":{"row":26,"column":10},"end":{"row":26,"column":11},"action":"insert","lines":["P"],"id":1503},{"start":{"row":26,"column":11},"end":{"row":26,"column":12},"action":"insert","lines":["O"]},{"start":{"row":26,"column":12},"end":{"row":26,"column":13},"action":"insert","lines":["S"]},{"start":{"row":26,"column":13},"end":{"row":26,"column":14},"action":"insert","lines":["T"]}],[{"start":{"row":26,"column":4},"end":{"row":26,"column":5},"action":"insert","lines":["/"],"id":1504},{"start":{"row":26,"column":5},"end":{"row":26,"column":6},"action":"insert","lines":["/"]}],[{"start":{"row":26,"column":6},"end":{"row":26,"column":7},"action":"insert","lines":[" "],"id":1505}],[{"start":{"row":26,"column":6},"end":{"row":26,"column":7},"action":"remove","lines":[" "],"id":1506},{"start":{"row":26,"column":5},"end":{"row":26,"column":6},"action":"remove","lines":["/"]},{"start":{"row":26,"column":4},"end":{"row":26,"column":5},"action":"remove","lines":["/"]}],[{"start":{"row":26,"column":15},"end":{"row":26,"column":35},"action":"remove","lines":["//submit_delete_book"],"id":1507}],[{"start":{"row":26,"column":14},"end":{"row":26,"column":15},"action":"insert","lines":["'"],"id":1508}],[{"start":{"row":26,"column":14},"end":{"row":26,"column":15},"action":"remove","lines":["'"],"id":1509}],[{"start":{"row":26,"column":14},"end":{"row":26,"column":16},"action":"insert","lines":["[]"],"id":1510}],[{"start":{"row":26,"column":15},"end":{"row":26,"column":17},"action":"insert","lines":["''"],"id":1511}],[{"start":{"row":26,"column":16},"end":{"row":26,"column":34},"action":"insert","lines":["submit_delete_book"],"id":1512}],[{"start":{"row":26,"column":37},"end":{"row":26,"column":38},"action":"insert","lines":[" "],"id":1513},{"start":{"row":26,"column":38},"end":{"row":26,"column":39},"action":"insert","lines":["{"]}],[{"start":{"row":26,"column":39},"end":{"row":28,"column":5},"action":"insert","lines":["","        ","    }"],"id":1514}],[{"start":{"row":27,"column":8},"end":{"row":27,"column":9},"action":"insert","lines":["$"],"id":1515},{"start":{"row":27,"column":9},"end":{"row":27,"column":10},"action":"insert","lines":["s"]}],[{"start":{"row":27,"column":10},"end":{"row":27,"column":11},"action":"insert","lines":["q"],"id":1516},{"start":{"row":27,"column":11},"end":{"row":27,"column":12},"action":"insert","lines":["l"]}],[{"start":{"row":27,"column":12},"end":{"row":27,"column":13},"action":"insert","lines":[" "],"id":1517},{"start":{"row":27,"column":13},"end":{"row":27,"column":14},"action":"insert","lines":["="]}],[{"start":{"row":27,"column":14},"end":{"row":27,"column":15},"action":"insert","lines":[" "],"id":1518}],[{"start":{"row":27,"column":15},"end":{"row":27,"column":17},"action":"insert","lines":["''"],"id":1519}],[{"start":{"row":27,"column":16},"end":{"row":27,"column":17},"action":"insert","lines":["D"],"id":1520},{"start":{"row":27,"column":17},"end":{"row":27,"column":18},"action":"insert","lines":["R"]},{"start":{"row":27,"column":18},"end":{"row":27,"column":19},"action":"insert","lines":["O"]},{"start":{"row":27,"column":19},"end":{"row":27,"column":20},"action":"insert","lines":["P"]}],[{"start":{"row":27,"column":20},"end":{"row":27,"column":21},"action":"insert","lines":[" "],"id":1521}],[{"start":{"row":27,"column":21},"end":{"row":27,"column":22},"action":"insert","lines":["F"],"id":1522},{"start":{"row":27,"column":22},"end":{"row":27,"column":23},"action":"insert","lines":["R"]},{"start":{"row":27,"column":23},"end":{"row":27,"column":24},"action":"insert","lines":["O"]},{"start":{"row":27,"column":24},"end":{"row":27,"column":25},"action":"insert","lines":["M"]}],[{"start":{"row":27,"column":25},"end":{"row":27,"column":26},"action":"insert","lines":[" "],"id":1523},{"start":{"row":27,"column":26},"end":{"row":27,"column":27},"action":"insert","lines":["b"]},{"start":{"row":27,"column":27},"end":{"row":27,"column":28},"action":"insert","lines":["o"]},{"start":{"row":27,"column":28},"end":{"row":27,"column":29},"action":"insert","lines":["o"]},{"start":{"row":27,"column":29},"end":{"row":27,"column":30},"action":"insert","lines":["l"]}],[{"start":{"row":27,"column":29},"end":{"row":27,"column":30},"action":"remove","lines":["l"],"id":1524}],[{"start":{"row":27,"column":29},"end":{"row":27,"column":30},"action":"insert","lines":["k"],"id":1525},{"start":{"row":27,"column":30},"end":{"row":27,"column":31},"action":"insert","lines":["s"]}],[{"start":{"row":27,"column":19},"end":{"row":27,"column":20},"action":"remove","lines":["P"],"id":1526},{"start":{"row":27,"column":18},"end":{"row":27,"column":19},"action":"remove","lines":["O"]},{"start":{"row":27,"column":17},"end":{"row":27,"column":18},"action":"remove","lines":["R"]}],[{"start":{"row":27,"column":17},"end":{"row":27,"column":18},"action":"insert","lines":["E"],"id":1527},{"start":{"row":27,"column":18},"end":{"row":27,"column":19},"action":"insert","lines":["L"]},{"start":{"row":27,"column":19},"end":{"row":27,"column":20},"action":"insert","lines":["E"]},{"start":{"row":27,"column":20},"end":{"row":27,"column":21},"action":"insert","lines":["E"]},{"start":{"row":27,"column":21},"end":{"row":27,"column":22},"action":"insert","lines":["T"]}],[{"start":{"row":27,"column":21},"end":{"row":27,"column":22},"action":"remove","lines":["T"],"id":1528},{"start":{"row":27,"column":20},"end":{"row":27,"column":21},"action":"remove","lines":["E"]}],[{"start":{"row":27,"column":20},"end":{"row":27,"column":21},"action":"insert","lines":["T"],"id":1529},{"start":{"row":27,"column":21},"end":{"row":27,"column":22},"action":"insert","lines":["E"]}],[{"start":{"row":27,"column":33},"end":{"row":27,"column":34},"action":"insert","lines":["("],"id":1530},{"start":{"row":27,"column":34},"end":{"row":27,"column":35},"action":"insert","lines":[")"]}],[{"start":{"row":27,"column":34},"end":{"row":27,"column":35},"action":"insert","lines":["t"],"id":1531},{"start":{"row":27,"column":35},"end":{"row":27,"column":36},"action":"insert","lines":["i"]},{"start":{"row":27,"column":36},"end":{"row":27,"column":37},"action":"insert","lines":["t"]},{"start":{"row":27,"column":37},"end":{"row":27,"column":38},"action":"insert","lines":["l"]},{"start":{"row":27,"column":38},"end":{"row":27,"column":39},"action":"insert","lines":["e"]}],[{"start":{"row":27,"column":39},"end":{"row":27,"column":40},"action":"insert","lines":[","],"id":1532}],[{"start":{"row":27,"column":40},"end":{"row":27,"column":41},"action":"insert","lines":[" "],"id":1533},{"start":{"row":27,"column":41},"end":{"row":27,"column":42},"action":"insert","lines":["i"]},{"start":{"row":27,"column":42},"end":{"row":27,"column":43},"action":"insert","lines":["m"]},{"start":{"row":27,"column":43},"end":{"row":27,"column":44},"action":"insert","lines":["a"]}],[{"start":{"row":27,"column":44},"end":{"row":27,"column":45},"action":"insert","lines":["g"],"id":1534},{"start":{"row":27,"column":45},"end":{"row":27,"column":46},"action":"insert","lines":["e"]},{"start":{"row":27,"column":46},"end":{"row":27,"column":47},"action":"insert","lines":["_"]},{"start":{"row":27,"column":47},"end":{"row":27,"column":48},"action":"insert","lines":["i"]},{"start":{"row":27,"column":48},"end":{"row":27,"column":49},"action":"insert","lines":["u"]}],[{"start":{"row":27,"column":48},"end":{"row":27,"column":49},"action":"remove","lines":["u"],"id":1535},{"start":{"row":27,"column":47},"end":{"row":27,"column":48},"action":"remove","lines":["i"]}],[{"start":{"row":27,"column":47},"end":{"row":27,"column":48},"action":"insert","lines":["u"],"id":1536},{"start":{"row":27,"column":48},"end":{"row":27,"column":49},"action":"insert","lines":["r"]},{"start":{"row":27,"column":49},"end":{"row":27,"column":50},"action":"insert","lines":["l"]}],[{"start":{"row":27,"column":50},"end":{"row":27,"column":51},"action":"insert","lines":[","],"id":1537}],[{"start":{"row":27,"column":51},"end":{"row":27,"column":52},"action":"insert","lines":[" "],"id":1538},{"start":{"row":27,"column":52},"end":{"row":27,"column":53},"action":"insert","lines":["s"]},{"start":{"row":27,"column":53},"end":{"row":27,"column":54},"action":"insert","lines":["t"]},{"start":{"row":27,"column":54},"end":{"row":27,"column":55},"action":"insert","lines":["a"]},{"start":{"row":27,"column":55},"end":{"row":27,"column":56},"action":"insert","lines":["t"]},{"start":{"row":27,"column":56},"end":{"row":27,"column":57},"action":"insert","lines":["u"]},{"start":{"row":27,"column":57},"end":{"row":27,"column":58},"action":"insert","lines":["s"]}],[{"start":{"row":27,"column":59},"end":{"row":27,"column":60},"action":"insert","lines":[" "],"id":1539},{"start":{"row":27,"column":60},"end":{"row":27,"column":61},"action":"insert","lines":["V"]},{"start":{"row":27,"column":61},"end":{"row":27,"column":62},"action":"insert","lines":["A"]},{"start":{"row":27,"column":62},"end":{"row":27,"column":63},"action":"insert","lines":["L"]},{"start":{"row":27,"column":63},"end":{"row":27,"column":64},"action":"insert","lines":["U"]},{"start":{"row":27,"column":64},"end":{"row":27,"column":65},"action":"insert","lines":["E"]}],[{"start":{"row":27,"column":65},"end":{"row":27,"column":66},"action":"insert","lines":["S"],"id":1540},{"start":{"row":27,"column":66},"end":{"row":27,"column":67},"action":"insert","lines":["("]},{"start":{"row":27,"column":67},"end":{"row":27,"column":68},"action":"insert","lines":[")"]}],[{"start":{"row":190,"column":53},"end":{"row":191,"column":32},"action":"insert","lines":["","                                "],"id":1541}],[{"start":{"row":191,"column":32},"end":{"row":191,"column":99},"action":"insert","lines":["<input type=\"hidden\" name=\"book_id\" value=\"<?php print h($id); ?>\">"],"id":1542}],[{"start":{"row":26,"column":3},"end":{"row":26,"column":4},"action":"insert","lines":["/"],"id":1543},{"start":{"row":26,"column":4},"end":{"row":26,"column":5},"action":"insert","lines":["/"]}],[{"start":{"row":26,"column":3},"end":{"row":26,"column":4},"action":"insert","lines":[" "],"id":1544}],[{"start":{"row":27,"column":4},"end":{"row":27,"column":5},"action":"insert","lines":["/"],"id":1545},{"start":{"row":27,"column":5},"end":{"row":27,"column":6},"action":"insert","lines":["/"]}],[{"start":{"row":28,"column":4},"end":{"row":28,"column":5},"action":"insert","lines":["/"],"id":1546},{"start":{"row":28,"column":5},"end":{"row":28,"column":6},"action":"insert","lines":["/"]}],[{"start":{"row":27,"column":35},"end":{"row":27,"column":71},"action":"remove","lines":["(title, image_url, status) VALUES()'"],"id":1547},{"start":{"row":27,"column":35},"end":{"row":27,"column":36},"action":"insert","lines":[" "]},{"start":{"row":27,"column":36},"end":{"row":27,"column":37},"action":"insert","lines":["W"]},{"start":{"row":27,"column":37},"end":{"row":27,"column":38},"action":"insert","lines":["H"]}],[{"start":{"row":27,"column":38},"end":{"row":27,"column":39},"action":"insert","lines":["E"],"id":1548},{"start":{"row":27,"column":39},"end":{"row":27,"column":40},"action":"insert","lines":["R"]},{"start":{"row":27,"column":40},"end":{"row":27,"column":41},"action":"insert","lines":["E"]}],[{"start":{"row":27,"column":41},"end":{"row":27,"column":42},"action":"insert","lines":[" "],"id":1549}],[{"start":{"row":27,"column":42},"end":{"row":27,"column":43},"action":"insert","lines":["i"],"id":1550},{"start":{"row":27,"column":43},"end":{"row":27,"column":44},"action":"insert","lines":["d"]},{"start":{"row":27,"column":44},"end":{"row":27,"column":45},"action":"insert","lines":["="]}],[{"start":{"row":27,"column":45},"end":{"row":27,"column":46},"action":"insert","lines":["?"],"id":1551}],[{"start":{"row":27,"column":46},"end":{"row":27,"column":48},"action":"insert","lines":["''"],"id":1552}],[{"start":{"row":26,"column":4},"end":{"row":26,"column":7},"action":"remove","lines":["// "],"id":1553}],[{"start":{"row":27,"column":4},"end":{"row":27,"column":6},"action":"remove","lines":["//"],"id":1554}],[{"start":{"row":28,"column":5},"end":{"row":28,"column":6},"action":"remove","lines":["/"],"id":1555},{"start":{"row":28,"column":4},"end":{"row":28,"column":5},"action":"remove","lines":["/"]}],[{"start":{"row":27,"column":45},"end":{"row":27,"column":46},"action":"remove","lines":["'"],"id":1556}],[{"start":{"row":27,"column":45},"end":{"row":27,"column":46},"action":"insert","lines":[";"],"id":1557}],[{"start":{"row":27,"column":46},"end":{"row":28,"column":0},"action":"insert","lines":["",""],"id":1558},{"start":{"row":28,"column":0},"end":{"row":28,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":28,"column":8},"end":{"row":31,"column":38},"action":"insert","lines":["$statement = mysqli_prepare($database, $sql);","        mysqli_stmt_bind_param($statement, 'i', $_POST['book_id']);","        mysqli_stmt_execute($statement);","        mysqli_stmt_close($statement);"],"id":1559}],[{"start":{"row":33,"column":0},"end":{"row":33,"column":4},"action":"remove","lines":["    "],"id":1560},{"start":{"row":32,"column":5},"end":{"row":33,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":25,"column":11},"end":{"row":25,"column":12},"action":"remove","lines":["日"],"id":1561},{"start":{"row":25,"column":10},"end":{"row":25,"column":11},"action":"remove","lines":["昨"]}],[{"start":{"row":25,"column":10},"end":{"row":25,"column":12},"action":"insert","lines":["機能"],"id":1562}],[{"start":{"row":34,"column":0},"end":{"row":34,"column":4},"action":"remove","lines":["    "],"id":1563},{"start":{"row":33,"column":4},"end":{"row":34,"column":0},"action":"remove","lines":["",""]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":8,"column":15},"end":{"row":8,"column":15},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1551710786254,"hash":"f822229c228962ea75471c7270f5bc856bfdbc72"}