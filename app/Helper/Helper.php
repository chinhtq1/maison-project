<?php

namespace App\Helper;
use Carbon\Carbon;
use Image;
use Str;
use Session;
use MetaTag;

class Helper {
    static function update_time_public($article) {
        if($article->is_public) {
            $article->date_public = Carbon::now();
        }else{
            $article->date_public = null;
        }
        $article->save();

    }

    static function render_time_to_vietnamese($datetime){
        if(!is_null($datetime)){
            $datetime = Carbon::parse($datetime);
            $datetime_vn = config('config.DATE_TIME_VN.day').$datetime->day.' '
                            .config('config.DATE_TIME_VN.month').$datetime->month.' '
                            .config('config.DATE_TIME_VN.year').$datetime->year;
            return $datetime_vn;
        }
        return '';

    }

    static function upload_picture($width=0, $height=0, $originPath, $targetPath, $filename) {
        $originPath = base_path(Str::replaceFirst('/','\\',$originPath));
        // dd(base_path(Str::replaceFirst('/','\\',$originPath)));
        $uploadDir = public_path($targetPath); // public/web/articles/article-id/
        // dd($uploadDir);
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }
        try {
            if($width == 0 || $height == 0) {
                $img = Image::make($originPath)->save($uploadDir.$filename); // public/web/articles/article-id/{slug}.extension
            }else{
                $img = Image::make($originPath)->resize($width, $height)->save($uploadDir.$filename); // public/web/articles/article-id/{slug}.extension
            }
        } catch (\Exception $e){
            Session::flash('message_errors', ['text' => "Không tìm thấy ảnh gốc", 'type' => 'error']);
        }
        return $targetPath.$filename;
    }

    static function getValueField($str,$result) {
        $splits =  preg_split('/([\[\]])/', $str);
        if(!is_null($splits)){
            foreach($splits as $match){
                if($match !=='' && !is_null($result)){
                    if(array_key_exists($match,$result))
                        $result = $result[$match];
                    else{
                        $result = null;
                        break;
                    }
                }
            }
        }
        return $result;

    }

    static function makeNonNestedRecursive(array &$out, $key, array $in){
        foreach($in as $k=>$v){
            if(is_array($v)){
                self::makeNonNestedRecursive($out, $key . $k . '.', $v);
            }else{
                $out[$key . $k] = $v;
            }
        }
    }
    
    static function makeNonNested(array $in){
        $tags = array();
        self:: makeNonNestedRecursive($tags, '', $in);
        foreach($tags as $tag => $value){
            MetaTag::set_raw($tag,$value);
        }
        // dd($tags);
        return $tags;
    }


}