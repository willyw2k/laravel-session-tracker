<?php namespace Hamedmehryar\SessionTracker\Models;

use Illuminate\Database\Eloquent\Model;

class SessionRequest extends Model {

    protected $fillable = ['session_id','route', 'uri','name','method', 'parameters','type'];
    public function session(){
        return $this->belongsTo('Hamedmehryar\SessionTracker\Models\Session');
    }

}
