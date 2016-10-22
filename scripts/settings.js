var settings = {};
settings.data = {};//пустой компонент, резервирует место для  данных  из innit settings
settings.init = function(oSettingsData){ //инициализация settings init. settingsdata - некоторый объект на вход
	settings.data = oSettingsData; //инициализация settings.data
	/*console.log(settings.data);*/
}
settings.get = function(sSettingsKey){//метод получения, подаем на вход значение по ключу

	return settings.data[sSettingsKey]; //_page_settings["your_form"] - идентичная запись
	
}