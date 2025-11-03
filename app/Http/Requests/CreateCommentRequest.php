<?php

declare(strict_types=1);

namespace App\Http\Requests;

use App\Models\Community;
use App\Models\Post;
use Illuminate\Foundation\Http\FormRequest;

final class CreateCommentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        /** @var Community $community */
        $community = $this->community;
        /** @var Post $post */
        $post = $this->post;

        return $post->community_id === $community->id;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, array<string>>
     */
    public function rules(): array
    {
        return [
            'content' => ['required', 'string'],
        ];
    }
}
