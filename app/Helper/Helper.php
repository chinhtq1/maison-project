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
            $now = Carbon::now();
            $article->date_public = self::render_time_to_vietnamese(
                $now
            );
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
    
    static function replaceDomain($url) {
        if(!is_null($url) ) {
            $domain = parse_url($url, PHP_URL_PATH);
            return $domain;
        } else {
            return null;
        }

    }

    static function upload_picture($width=0, $height=0, $originPath, $targetPath, $filename) {
        $originPath = base_path(Str::replaceFirst('/','\\',$originPath));
        print_r(base_path(Str::replaceFirst('/','\\',$originPath)));
        $uploadDir = public_path($targetPath); // public/web/articles/article-id/
        print_r($uploadDir);
        print_r($originPath);
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }
        // try {
            if($width == 0 || $height == 0) {
                $img = Image::make($originPath)->save($uploadDir.$filename); // public/web/articles/article-id/{slug}.extension
            }else{
                $img = Image::make($originPath)->resize($width, $height)->save($uploadDir.$filename); // public/web/articles/article-id/{slug}.extension
            }
        // } catch (\Exception $e){
        //     Session::flash('message_errors', ['text' => "Không tìm thấy ảnh gốc", 'type' => 'error']);
        // }
        return $targetPath.$filename;
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
    
    static function makeNonNested($in){
        if (!is_null($in)){
            $tags = array();
            self:: makeNonNestedRecursive($tags, '', $in);
            foreach($tags as $tag => $value){
                MetaTag::set_raw($tag,$value);
            }
            // dd(MetaTag::get('fuck'));

            // dd($tags);
            return $tags;
        }
        return null;
    }

    static function upload_image($filename, $uploadDir, $data) {
        if (\Request::hasFile($filename)) {
            $extension = $data[$filename]->getClientOriginalExtension();
            $allowedExtensions = array('jpeg', 'jpg', 'png', 'bmp', 'gif');
            $file_rename   = $filename.'.' . $extension;
            if (in_array($extension, $allowedExtensions)) {
                $data[$filename]->move($uploadDir, $file_rename);
                return asset($uploadDir . $file_rename);
            }
        }
    }


}