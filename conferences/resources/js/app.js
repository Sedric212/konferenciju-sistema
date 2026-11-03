import flatpickr from 'flatpickr';
import { Lithuanian } from 'flatpickr/dist/l10n/lt.js';
flatpickr('input[name="date"]', {locale: Lithuanian, dateFormat:'Y-m-d', allowInput:true});
document.querySelectorAll('form[data-confirm]').forEach(form=>form.addEventListener('submit',event=>{if(!window.confirm(form.dataset.confirm)) event.preventDefault();}));
