{* Template for rendering description element. Params:
- $input_id
- $description - string, displayed value *}

{if ezini( 'AdditionalElements', 'Description', 'formmaker.ini' )|eq( 'enabled' )}
    <div class="form-field-attribute form-field-description">
        {'Description:'|i18n( 'formmaker/admin' )}
        <input type="text" value="{$description|wash()}" name="formelement_{$input_id}[description]" />
    </div>
{/if}