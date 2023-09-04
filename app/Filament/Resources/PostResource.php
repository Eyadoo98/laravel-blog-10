<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostResource\Pages;
use App\Filament\Resources\PostResource\RelationManagers;
use App\Models\Category;
use App\Models\Post;
use Closure;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Grid;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;
use Filament\Forms\Components\FileUpload;
use FilamentTiptapEditor\TiptapEditor;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static ?string $navigationGroup = 'Content'; //for make resource in group navigation

    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                        Grid::make(2)
                            ->schema([
                                Forms\Components\TextInput::make('title')
                                    ->required()
                                    ->maxLength(2048)
                                    ->reactive()
                                    ->afterStateUpdated(function (Closure $set, $state) {
                                        $set('slug', Str::slug($state));
                                    }),
                                Forms\Components\TextInput::make('slug')
                                    ->required()
                                    ->maxLength(2048),
                            ]),

//                        Forms\Components\RichEditor::make('body')
//                            ->required(),

                        TiptapEditor::make('body')
//                            ->profile('default|simple|barebone|custom')
//                            ->tools([]) // individual tools to use in the editor, overwrites profile
//                            ->disk('string') // optional, defaults to config setting
//                            ->directory('string or Closure returning a string') // optional, defaults to config setting
//                            ->acceptedFileTypes(['array of file types']) // optional, defaults to config setting
//                            ->output('json') // optional, change the output format. defaults is html
//                            ->maxContentWidth('5xl')
                            ->extraInputAttributes(
                                [
                                    'style' => 'direction:rtl;',
                                ]
                            )
                            ->tools(
                                [

                                    'heading',
                                    'bold',
                                    'italic',
                                    'link',
                                    'bullet-list',
                                    'ordered-list',
                                    'hr',
                                    'bold',
                                    'italic',
                                    'strike',
                                    'underline',
                                    'superscript',
                                    'subscript',
                                    'color',
                                    'align-left',
                                    'align-center',
                                    'align-right',
                                    'link',
                                    'media',
                                ]
                            )
                            ->required(),

                        Forms\Components\Toggle::make('active')
                            ->required(),
                        Forms\Components\DatePicker::make('publish_at'),
                    ])->columnSpan(8),

                Card::make()
                    ->schema([
                        FileUpload::make('thumbnail')->disk('custom')->directory('images'),
                        Forms\Components\Select::make('category_id')
                            ->multiple()
                            ->relationship('categories', 'title')
                            ->options(
                                Category::all()->pluck('title', 'id')
                            )
                            ->required(),
                    ])->columnSpan(4),

            ])->columns(12);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('thumbnail')->disk('custom'),
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\IconColumn::make('active')
                    ->boolean(),
                Tables\Columns\TextColumn::make('publish_at')
                    ->dateTime(),
                // Tables\Columns\TextColumn::make('user.name'),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                // To add action in table
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
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
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'view' => Pages\ViewPost::route('/{record}'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }
}
