<!DOCTYPE html>
<html>
<head>
    <style>
    tr,td{
        border: 1px solid black;
        padding: 4px;
    }
    
    </style>
</head>
<body>
    <?php
        $tensp = ["book","pen","ruler"];
        $giasp = [5000,3000,4000];
        $nsx   = ["Da Nang","Ha Noi","HCM"];

    ?>
 
    <table>
        <thead>
            <tr>
                <td>STT</td>
                <td>Ten</td>
                <td>Gia</td>
                <td>NSX</td>
            </tr>
        </thead>
        <tbody>
        
            <?php for ($i = 0; $i < count($tensp); $i++){?>
                <tr>
                    <td><?php echo ($i+1); ?></td>
                    <td><?php echo $tensp[$i]; ?></td>
                    <td><?php echo $giasp[$i]; ?></td>
                    <td><?php echo $nsx[$i]; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>



