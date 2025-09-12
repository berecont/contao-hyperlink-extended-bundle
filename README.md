# Hyperlink Extended Box  
## Erzeugt wird ein Inhaltselement von mindestens einer oder mehreren Link-Gruppen.  
Je Gruppe können folgende Felder befüllt, bzw. Auswahlen getroffen werden:  
- **Link-Adresse**  
Manuelle Eingabe einer Adresse, oder Auswahl über Picker.
- **Link-Text**  
Text der im Frontend anstelle der URL angezeigt wird  .
- **ARIA-Label**  
Wird als `arial-label` ausgegeben.
- **Eigene Attribute**  
Eine Möglichkeit eigene Attribute einzugeben. Diese werden im Frontend mit ausgegeben.  
z.B. `aria-expanded=false` oder `data-foo="bar"` oder `tabindex=1`  
Erlaubt sind im Standard `aria` `data` `tabindex`  
Über die globale `config\config.yaml` können eigene Attribute erlaubt werden:  
```
berecont_contao_hyperlink_extended:
  allow_data: true        # data-* erlauben
  allow_aria: true        # aria-* erlauben
  allowed_attribute_names:
    - tabindex            # zusätzlich exakt erlaubte Namen
    # - role              # (wenn du es wirklich zulassen willst)
  allowed_attribute_patterns:
    # - '/^x-[\w-]+$/i'   # Beispiel für eigene Präfixe
```
- **CSS-Klasse**  
Die Klassen werden direkt dem <a>-tag beigefügt  
- **In neuem Fenster öffnen**  
Es wird ein `target="_blank"` PLUS ein `rel="noopener"` eingefügt und das Linkziel wird in neuem Tab geöffnet.  
- **rel-Attribute** 
Zusätzlich können noch weitere rel-Attribute mit angehakt werden.  
`noopener` wird nicht übergeben, wenn der Haken bei `In neuem Fenster öffnen` nicht gesetzt ist.
- **Download erzwingen**  
Es wird das `Download-Attribut` mit eingefügt.
- **Dateiname für Download**  
Es wird der Dateiname für die heruntergeladene Datei eingefügt.

![hyperlink-extended](https://github.com/user-attachments/assets/6503cf65-dc99-4fd2-b663-5091ff646a33)
