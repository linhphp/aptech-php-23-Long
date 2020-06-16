<!DOCTYPE html>
<html>
<head>
    <?php 
        $sp =[
         [
            "Bphone", 10000000,"Viet Nam"
        ],
        [
            "Sam Sung", 7000000,"Han Quoc"

         ],
        [
            "Iphone",20000000,"Trung Quoc"
        ],
        ];
        /*echo $sp [0][0]." ".$sp [0][1]." ".$sp [0][2] ."<br>";
        echo $sp [1][0]." ".$sp [1][1]." ".$sp [1][2] ."<br>";
        echo $sp [2][0]." ".$sp [2][1]." ".$sp [2][2] ."<br>"; */

    ?>


    <table>
        <thead>
            <tr>
                <th>STT</th>
                <th>Ten</th>
                <th>Gia</th>
                <th>NSX</th>
            </tr>
        </thead>
        <tbody>
        <?php 
            for ($i=0 ; $i < count($sp) ; $i++ ) { ?>
            <tr> 
            <?php for($n = 0; $n < count($sp[$i]); $n++){ ?>
                <td><?php echo ($i+1)?>
                <?php echo $sp[$i][$n]; ?></td>    
            <?php }?>
            </tr>
         <?php }
        ?>
        

        </tbody>
    </table>

</head>
   
</html>



