<?php

namespace lyhiving\Mobile;

class Mobile2Brand
{
    protected $icons = array('unk'=>'unknown','360'=>'360','xia'=>'xiaomi','coo'=>'coolpad','gio'=>'gionee','goo'=>'google','hon'=>'honor','htc'=>'htc','hua'=>'huawei','iph'=>'iphone','len'=>'lenovo','mei'=>'meizu','mot'=>'motorola','nok'=>'nokia','nuo'=>'nuoio','one'=>'oneplus','opp'=>'oppo','sam'=>'samsung','sma'=>'smartisan','son'=>'sony','viv'=>'vivo','xia'=>'xiaomi','zte'=>'zte','nex'=>'google','pix'=>'google');
 
    protected $mkey = array('meit'=>'meitu');

    public $url;

    public function __construct($url='')
    {
        $this->url($url);
    }

    public function url($url){
        if ($url||is_null($url)) {
            $this->url = $url;
        }
        return $this;
    }

    public function find($model, $brand=''){
        $brand = $this->_guest($model, $brand);
        return $this->url ? $this->url.$brand.'.jpg' : $brand;
    }

    private function _guest($model, $brand='')
    {
        if (!$model) {
            return 'unknown';
        }
        $model = str_replace(" ", "", strtolower($model));
        $brand =  str_replace(" ", "", strtolower($brand));
        $m = substr($model, 0, 3);
        $m4 = substr($model, 0, 4);
        $b = substr($brand, 0, 3);
        $keys = array_keys($this->icons);
        $mkey = array('meit'=>'meitu');
        if (in_array($m, $keys)) {
            return !isset($mkey[$m4]) ? $this->icons[$m]:$mkey[$m4];
        }
        if (in_array($b, $keys)) {
            return !isset($mkey[$m4]) ? $this->icons[$b]:$mkey[$m4];
        }
        return 'unknown';
    }
}
