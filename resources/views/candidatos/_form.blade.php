
<!-- Create -->
     <div class="uk-grid-small uk-grid-middle" uk-grid>
        <div class="uk-width-1-3@m">
            <div class="form-group">
                <input type="text" name="foto" class="uk-input" placeholder="Foto"
                    @if(isset ($collection))
                        value="{{ $collection->foto }}"
                    @endif                
                >
            </div>
        </div>
        <div class="uk-width-1-3@m">
            <div class="form-group">
                <input type="text" name="nome" class="uk-input" placeholder="Nome"
                    @if(isset ($collection))
                        value="{{ $collection->nome }}"
                    @endif                
                >
            </div>
        </div>     
        <div class="uk-width-1-3@m">
            
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
        <button type="submit" class="uk-button uk-button-primary uk-border-rounded">Salvar</button>
    </div>  