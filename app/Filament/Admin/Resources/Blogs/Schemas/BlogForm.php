<?php

namespace App\Filament\Admin\Resources\Blogs\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\RichEditor;

class BlogForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required()
                    ->label(__('filament.blog.fields.title')),
                RichEditor::make('content')
                    ->required()
                    ->columnSpanFull()
                    ->label(__('filament.blog.fields.content')),
                TextInput::make('by'),
                RichEditor::make('content_2')
                    ->columnSpanFull()
                    ->label(__('filament.blog.fields.content_2')),
                RichEditor::make('conclusion')
                    ->columnSpanFull()
                    ->label(__('filament.blog.fields.conclusion')),
                SpatieMediaLibraryFileUpload::make('photo')
                    ->collection('photo')
                    ->disk('public') 
                    ->image()
                    ->required()
                    ->label(__('filament.blog.fields.photo')),
                SpatieMediaLibraryFileUpload::make('inside_image')
                    ->collection('inside_image')
                    ->disk('public') 
                    ->image()
                    ->required()
                    ->label(__('filament.blog.fields.inside_image')),
                SpatieMediaLibraryFileUpload::make('other_images')
                    ->collection('other_images')
                    ->disk('public') 
                    ->image()
                    ->required()
                    ->label(__('filament.blog.fields.other_images')),
                Select::make('category_id')
                    ->options(Category::all()->pluck('name', 'id'))
                    ->required(),
            ]);
    }
}
