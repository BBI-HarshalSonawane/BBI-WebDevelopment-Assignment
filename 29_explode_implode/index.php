<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

    <body>
        
        <!--  ✅ "explode" mainly used for "split"👈 an text-->
        <!--  ✅ "implode" mainly used for "merge"👈 an text-->

        <?php
        

            $rowText = "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sint, blanditiis ipsa voluptate voluptates, ab nostrum provident quisquam qui repudiandae perspiciatis aut? Tempora repudiandae corrupti praesentium quo similique nesciunt aspernatur, optio debitis aliquid et in aut, voluptatum qui impedit iste minus temporibus voluptates a pariatur laudantium molestiae, dolore mollitia repellat. Impedit quod molestias reprehenderit eaque numquam a architecto ipsam alias, porro veritatis dolor autem eos nihil asperiores qui nostrum recusandae voluptate corporis minima. Deleniti ea culpa debitis magni voluptatum amet labore alias assumenda autem ipsa temporibus, nesciunt molestias atque laudantium vitae! Corrupti, eius nisi odio quis vitae minus iusto modi neque.
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sint, blanditiis ipsa voluptate voluptates, ab nostrum provident quisquam qui repudiandae perspiciatis aut? Tempora repudiandae corrupti praesentium quo similique nesciunt aspernatur, optio debitis aliquid et in aut, voluptatum qui impedit iste minus temporibus voluptates a pariatur laudantium molestiae, dolore mollitia repellat. Impedit quod molestias reprehenderit eaque numquam a architecto ipsam alias, porro veritatis dolor autem eos nihil asperiores qui nostrum recusandae voluptate corporis minima. Deleniti ea culpa debitis magni voluptatum amet labore alias assumenda autem ipsa temporibus, nesciunt molestias atque laudantium vitae! Corrupti, eius nisi odio quis vitae minus iusto modi neque.
            ";

            // 1️⃣ ✅ So basically "explode" here help us to split our text from given "special char or word" like below "\n" and so on....

            // var_dump(explode(".", $rowText));
            // explode("\n", $rowText);
            // explode(",", $rowText);
            // explode("\t", $rowText);
            // explode("Lorem", $rowText);

            $finalSplitAns = explode("\n", $rowText);

            $finalMergeAns = implode("######",$finalSplitAns);

            var_dump($finalMergeAns);

        ?>
            
        <!-- useCase of ✅ "explode" -->

        <pre>
            <?php foreach ($finalSplitAns as $key) :?>
                <h3><?php $key ?></h3>
            <?php endforeach;?>
        </pre>

       
        



    </body>
</html>