<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\PageComment
 *
 * @property int $id
 * @property string $page
 * @property string $author
 * @property string $comment
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Query\Builder|\App\PageComment onlyTrashed()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PageComment whereAuthor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PageComment whereComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PageComment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PageComment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PageComment wherePage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PageComment whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\PageComment withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\PageComment withoutTrashed()
 * @mixin \Eloquent
 * @property \Carbon\Carbon|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PageComment whereDeletedAt($value)
 */
class PageComment extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'page', 'author', 'comment',
    ];

    protected $dates = ['deleted_at'];
}