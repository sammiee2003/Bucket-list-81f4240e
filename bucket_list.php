<?php

$aantal = readline("hoeveel activiteiten wilt u op uw bucket list");

if(is_numeric($aantal)){

}else{
    exit("het is geen getal");
}

for ($i = 1; $i <= $aantal; $i ++){
   readline("voeg een activiteit toe"."\n");
}


