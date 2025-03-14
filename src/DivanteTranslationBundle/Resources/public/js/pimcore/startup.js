pimcore.registerNS("pimcore.plugin.TranslationBundle");

pimcore.plugin.TranslationBundle = Class.create({
    initialize: function () {
        Ext.Ajax.request({
            url: "/admin/translate-provider",
            method: "GET",
            success: function (response) {
                var res = Ext.decode(response.responseText);
                pimcore.globalmanager.add('translationBundle_provider', res.provider);
            }
        });
    },
});

var TranslationBundlePlugin = new pimcore.plugin.TranslationBundle();
