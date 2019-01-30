<div class="form-group">
    <label for="{{ $id ?? '' }}" class="form-control-label">{{ $labelName ?? '' }}</label>
    <input type="{{ $type ?? '' }}"
           name="{{ $name ?? '' }}"
           value="{{ $value ?? '' }}"
           class="form-control {{ $class ?? '' }}"
           id="{{ $id ?? '' }}"
           placeholder="{{ $placeholder ?? '' }}">
    <small class="form-text text-muted">{{ $warning ?? '' }}</small>
</div>