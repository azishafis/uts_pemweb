<?php

namespace App\Http\Requests;

use App\Models\Pelanggan;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdatePelangganRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('pelanggan_edit');
    }

    public function rules()
    {
        return [
            'nama_pelanggan' => [
                'string',
                'required',
            ],
            'jenis_kelamin' => [
                'string',
                'required',
            ],
            'waktu_transaksi' => [
                'string',
                'required',
            ]
        ];
    }
}
