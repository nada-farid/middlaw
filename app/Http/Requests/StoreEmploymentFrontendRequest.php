<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEmploymentFrontendRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Allow all users to submit employment applications
    }

    public function rules()
    {
        return [
            'name' => [
                'required',
                'string',
                'max:255',
            ],
            'email' => [
                'required',
                'email',
                'max:255',
            ],
            'phone' => [
                'required',
                'string',
                'max:20',
            ],
            'address' => [
                'nullable',
                'string',
            ],
            'position' => [
                'required',
                'string',
                'max:255',
            ],
            'experience' => [
                'required',
                'string',
            ],
            'resume' => [
                'required',
                'file',
                'mimes:pdf',
                'max:10240', // 10MB
            ],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'الاسم الكامل مطلوب',
            'name.string' => 'الاسم يجب أن يكون نص',
            'email.required' => 'البريد الإلكتروني مطلوب',
            'email.email' => 'البريد الإلكتروني غير صحيح',
            'phone.required' => 'رقم الجوال مطلوب',
            'address.string' => 'العنوان يجب أن يكون نص',
            'position.required' => 'الوظيفة المطلوبة مطلوبة',
            'position.string' => 'الوظيفة المطلوبة يجب أن يكون نص',
            'experience.required' => 'الخبرة العملية مطلوبة',
            'experience.string' => 'الخبرة العملية يجب أن يكون نص',
            'resume.required' => 'يرجى رفع السيرة الذاتية',
            'resume.file' => 'السيرة الذاتية يجب أن تكون ملف PDF',
            'resume.mimes' => 'السيرة الذاتية يجب أن تكون ملف PDF',
            'resume.max' => 'حجم السيرة الذاتية يجب ألا يتجاوز 10 ميجابايت',
        ];
    }
}
