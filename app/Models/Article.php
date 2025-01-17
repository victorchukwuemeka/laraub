<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Tonysm\RichTextLaravel\Models\Traits\HasRichText;

class Article extends Model
{
    use HasFactory, HasRichText;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'article';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * Rich text attributes managed by the model.
     *
     * @var array
     */
    protected $richTextAttributes = [
        'body',
        'notes',
    ];

    /**
     * Add a new rich text attribute to the model.
     *
     * @param string $attribute
     * @return void
     */
    public function addRichTextAttribute(string $attribute): void
    {
        if (!in_array($attribute, $this->richTextAttributes)) {
            $this->richTextAttributes[] = $attribute;
        }
    }

    /**
     * Validation rules for creating/updating articles.
     *
     * @return array
     */
    public static function rules(): array
    {
        return [
            'title' => ['required', 'unique:article', 'max:255'],
            'body' => ['required'],
            'notes' => ['nullable'],
            'slug' => ['required', 'unique:article', 'max:255'],
            'thumbnail' => ['nullable', 'string', 'max:255'],
            'status' => ['required', 'in:draft,published'], // Only allow specific statuses
        ];
    }

    /**
     * Validate the request data against the model's rules.
     *
     * @param \Illuminate\Http\Request $request
     * @return void
     */
    public static function validateRequest($request): void
    {
        $request->validate(self::rules());
    }
}