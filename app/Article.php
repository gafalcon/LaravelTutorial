<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Article extends Model {

	//
    protected $fillable = ['title', 'body', 'published_at', 'user_id'];

    protected $dates = ['published_at'];

    // setColumnNameAttribute
    public function setPublishedAtAttribute($date){
        $this->attributes['published_at'] = Carbon::parse($date);

    }

    //QueryScope
    public function scopePublished($query){
        $query->where('published_at', '<=', Carbon::now());
    }

    //QueryScope
    public function scopeUnpublished($query){
        $query->where('published_at', '>', Carbon::now());
    }

    /**
     * An article is owned by a use
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     *
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * Get the tags associated with the article
     *
     *
     * @return ManyToMany relation 
     */
    public function tags()
    {
        return $this->belongsToMany('App\Tag')->withTimestamps(); 
    }

    /**
     * Gets a list of tags ids associated with the current article
     *
     * @return array of ids
     */
    public function getTagListAttribute(){

        return $this->tags->lists('id');
    }
}
