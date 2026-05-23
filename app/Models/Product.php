<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model{
    use HasFactory;
    
    protected $fillable = ['name', 'description', 'quantity', 'price', 'type_id'];
    //o atributo fillable é usado para especificar quais atributos da Model
    //podem ser massivamente atribuídos
    
    public function type(){
        return $this->belongsTo(Type::class);
    }
    //aqui eu indico que a função tipo pertence a classe Produto 
    
}
