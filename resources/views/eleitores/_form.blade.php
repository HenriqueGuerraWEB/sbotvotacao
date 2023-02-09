
     <div class="uk-grid-small" uk-grid>
        <div class="uk-width-1-4@m">
            <div class="form-group">
                <input type="text" name="nome" class="uk-input" placeholder="Nome"
                    @if(isset ($collection))
                        value="{{ $collection->nome }}"
                    @endif                 
                >
            </div>
        </div>
        <div class="uk-width-1-4@m">
            <div class="form-group">
                <input type="email" name="email" class="uk-input" placeholder="E-mail"
                    @if(isset ($collection))
                        value="{{ $collection->email }}"
                    @endif                 
                >
            </div>
        </div>
        <div class="uk-width-1-4@m">
            <div class="form-group">
                <input type="text" name="crm" class="uk-input" placeholder="CRM"
                    @if(isset ($collection))
                        value="{{ $collection->crm }}"
                    @endif                 
                >
            </div>
        </div>        
        <div class="uk-width-1-4@m">
            
        <label><input class="uk-checkbox" type="checkbox" name="sbot" value="1"
            @if(isset ($collection))
                @if($collection->sbot)
                    checked="checked"
                @endif
            @endif        
        > SBOT</label>
        <label><input class="uk-checkbox" type="checkbox" name="coomtoce" value="1"
            @if(isset ($collection))
                @if($collection->coomtoce)
                    checked="checked"
                @endif
            @endif         
        > COOMTOCE</label>
            
        </div> 
    </div>
    <div class="uk-text-center uk-margin-top">
        <button type="submit" class="uk-button uk-button-primary uk-border-rounded">Enviar</button>
    </div>    