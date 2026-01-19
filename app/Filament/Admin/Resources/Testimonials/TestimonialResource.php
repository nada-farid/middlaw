<?php

namespace App\Filament\Admin\Resources\Testimonials;

use App\Filament\Admin\Resources\Testimonials\Pages\CreateTestimonial;
use App\Filament\Admin\Resources\Testimonials\Pages\EditTestimonial;
use App\Filament\Admin\Resources\Testimonials\Pages\ListTestimonials;
use App\Filament\Admin\Resources\Testimonials\Pages\ViewTestimonial;
use App\Filament\Admin\Resources\Testimonials\Schemas\TestimonialForm;
use App\Filament\Admin\Resources\Testimonials\Schemas\TestimonialInfolist;
use App\Filament\Admin\Resources\Testimonials\Tables\TestimonialsTable;
use App\Models\Testimonial;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class TestimonialResource extends Resource
{
    protected static ?string $model = Testimonial::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'testimonial';

    protected static ?int $navigationSort = 13;

    public static function getNavigationLabel(): string
    {
        return __('filament.testimonial.title');
    }

    public static function form(Schema $schema): Schema
    {
        return TestimonialForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return TestimonialInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return TestimonialsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListTestimonials::route('/'),
            'create' => CreateTestimonial::route('/create'),
            'view' => ViewTestimonial::route('/{record}'),
            'edit' => EditTestimonial::route('/{record}/edit'),
        ];
    }
}
