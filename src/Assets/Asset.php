<?php namespace bagosii\laravelTheme\Assets;

class Asset extends abastractAsset {
 
    public function toStr(){
        return $this->url()."\r\n";
    }
}
