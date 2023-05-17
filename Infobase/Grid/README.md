
# Infobase IT

Below are requirements extracted from the source repository README.md, followed by the tasks that were performed to meet the requirements.

> Primeiramente, faça um fork e clone do projeto;
> Crie uma branch com o seu nome e sobrenome, exemplo: **"backend-nome-sobrenome"**;

- [x] https://github.com/ribahh-4738/backend-challenge-two/tree/backend-ailton-ribeiro


## Installation details

. clone

```bash
git clone https://github.com/ribahh-4738/backend-challenge-two.git
```

. copy `app/code/Infobase` folder

```bash
cp -r backend-challenge-two/app/code/Infobase /app/code/
```

. install

```bash
php bin/magento setup:upgrade
```

For information about a module installation in Magento 2, see [Enable or disable modules](https://devdocs.magento.com/guides/v2.4/install-gde/install/cli/install-cli-subcommands-enable.html).

## Extensibility

Extension developers can interact with the **Infobase_Grid** module. For more information about the Magento extension mechanism, see [Magento plug-ins](https://devdocs.magento.com/guides/v2.4/extension-dev-guide/plugins.html).

[The Magento dependency injection mechanism](https://devdocs.magento.com/guides/v2.4/extension-dev-guide/depend-inj.html) enables you to override the functionality of the **Infobase_Grid** module.

### Layouts

**Infobase_Grid** module introduces layout handles in the `view/adminhtml/layout` directory.

For more information about a layout in Magento 2, see the [Layout documentation](https://devdocs.magento.com/guides/v2.4/frontend-dev-guide/layouts/layout-overview.html).

### UI components

You can extend product and category updates using the UI components located in the `view/adminhtml/ui_component` directory.

For information about a UI component in Magento 2, see [Overview of UI components](https://devdocs.magento.com/guides/v2.4/ui_comp_guide/bk-ui_comps.html).

## Additional information

For information about significant changes in patch releases, see [Release information](https://devdocs.magento.com/guides/v2.4/release-notes/bk-release-notes.html).