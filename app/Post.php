<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

// per usare la funzione generateSlug devo caricare l'Str
use Illuminate\Support\Str;

class Post extends Model
{
    public static function generateSlug($title){
        // genero lo slug
        $slug = Str::slug($title);
        $slug_base = $slug;

        // creo la query con Eloquent
        $post_presente = Post::where('slug', $slug)->first();

        // se è presente concateno allo slug un contatore
        $c = 1;
        while($post_presente){
            $slug = $slug_base . '-' . $c;
            $c++;
            $post_presente = Post::where('slug', '$slug')->first();
        }
        
        return $slug;
    }
}
