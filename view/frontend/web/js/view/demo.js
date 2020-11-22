/**
 * Created by kaushik on 15/1/20.
 */
define([
    'uiComponent',
    'ko'
],function (component, ko) {
    return component.extend({
        _currentTime: ko.observable("loading..."),
        initialize: function () {
            this._super();
            setInterval(this.updateTime.bind(this), 1000);
        },
        updateTime: function () {
            return this._currentTime(new Date());
        },
        getTime: function () {
            return this._currentTime;
        }
    });
});
