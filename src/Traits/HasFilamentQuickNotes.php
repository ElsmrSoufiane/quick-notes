<?php

namespace soufianelasmar\quicknote\Traits;

use Illuminate\Database\Eloquent\Relations\MorphMany;
use soufianelasmar\quicknote\Models\FilamentQuickNote;

trait HasFilamentQuickNotes
{
    /**
     * @return MorphMany
     */
    public function filamentQuickNotes(): MorphMany
    {
        return $this
            ->morphMany(config('filament-quick-notes.quick_notes_model', FilamentQuickNote::class), 'user');
    }
}
