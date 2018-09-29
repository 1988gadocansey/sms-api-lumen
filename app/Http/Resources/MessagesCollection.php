<?php
/**
 * Created by PhpStorm.
 * User: BENJIRO
 * Date: 9/26/2018
 * Time: 10:08 PM
 */

namespace App\Http\Resources;
use Illuminate\Http\Resources\Json\JsonResource;
use app\Messages;


class MessagesCollection extends JsonResource
{
    public function toArray($request)
    {
        return [
        'id' => $this->id,
        'date' => $this->date,
        'message' => $this->message,
        'phone_number' => $this->phone_number,
        'status' => $this->status,
        'type' => $this->type,
        'sent_by' => $this->sent_by,
        'semester' => $this->semester,
        'year' => $this->year,
        'receipient' => $this->receipient,
    ];
    }
}