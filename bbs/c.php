<div style = "width:1500px;">

    <div style = "width:650px;padding-left:300px;margin-top:100px;
            display:inline-block;">


<p style = "font-size:16px;margin:0;border-color:gray;border-width:thin;
            padding:13px;margin-top:20px;background-color:#ffcfa3;color:white;border-radius: 10px 10px 0 0;">ゲームで繋がる掲示板</p>
<p style = "font-size:18px;padding-left:18px;border-bottom:ridge;display:inline-block;">ゲーム情報をみんなで交換しよう！友だち募集やゲーム攻略などゲーム情報が満載！</p>


</div>

<div style = "display:inline-block;margin-left:30px;border-bottom:ridge;">
            <p  style = "display:inline-block;
            background-color:#ffcfa3;
            color:white;border-radius: 10px 10px 0 0;padding: 20px 100px;">検索</p>
    
<p>    <input type="text">
    <input type="submit" value = "検索">
</p>
</div>

    
    
    <p style = "font-size:16px;margin:0;border-color:gray;border-width:thin;
            padding:13px;margin-top:20px;background-color:#ffcfa3;color:white;
            border-radius: 10px 10px 0 0;width:620px;margin-left:300px;
            display:inline-block;">
                ゲームタイトル一覧</p>
                
                
                
            </div>
            
            
            <div style = "background-color:#fff2e5;width:640px;margin-left:300px;
            display:inline-block;">





<table border="1" style="border-collapse: collapse;margin-top:40px;margin-left:20px;border-color:#F5F5F5;">
    <tr style = "background-color:white;">
        <th style = "border-bottom-color:orange;">rpg</th>
    </tr>
    <tr>
        <?php
                
                $result = RPGTitle();
                
                $array = array_slice($result,0,100);
                
                foreach($array as $tItem){
                    outThreadLists($tItem);
                }
        ?>
        
    </tr>
    <table border="1" style="width:596px;border-collapse:collapse;border-color:#F5F5F5;margin-top:40px;margin-left:20px;">
    <tr style = "background-color:white;">
        <th style = "border-bottom-color:orange;">FPS</th>
    </tr>
    <tr>
        <?php
                
                $result = getFullTitle();
                
                $array = array_slice($result,0,100);
                
                foreach($array as $tItem){
                    outThreadLists($tItem);
                }
                ?>
        
    </tr>
</table>
    <table border="1" style="width:596px;border-collapse:collapse;border-color:#F5F5F5;margin-top:40px;margin-left:20px;">
    <tr style = "background-color:white;">
        <th style = "border-bottom-color:orange;">FPS</th>
    </tr>
    <tr>
        <?php
                
                $result = getFullTitle();
                
                $array = array_slice($result,0,100);
                
                foreach($array as $tItem){
                    outThreadLists($tItem);
                }
                ?>
        
            </tr>
</div>
</div>