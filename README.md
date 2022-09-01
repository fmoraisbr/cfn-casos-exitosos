# EXPERIÊNCIAS EXITOSAS NA NUTRIÇÃO

<br/><p align="center">
  <img align="" width="" height="" src="https://github.com/fmoraisbr/cfn-casos-exitosos/blob/main/logo-sistema-branco.png">
</p>

### Landing Page desenvolvida a pedido da Comissão de Comunicação do CFN (CCom) com o propósito de criar um espaço para que nutricionistas de todo o país demonstrem como a profissão pode contribuir para melhorar a vida da população brasileira<br/>

#### Subsídios de sistema:

1. **Documentação: 🗒️ [Notion](https://fmoraisbr.notion.site/CFN-Casos-de-Experi-cias-Exitosas-1156f762f9c442e183368757f56a6155)**
2. **Mockup do Projeto: 📐 [Figma](https://www.figma.com/file/hHi9rscYGoCgDl9CDzrluS/CFN---Casos-de-Experi%C3%AAcias-Exitosas?node-id=0%3A1)** 
3. **Mapa de Páginas: 📍 [Xmind](https://xmind.works/#/share/y403m5Tl)**
4. **Landing Page: 🌐 [Host](http://cfnutri.online/landing/experiencias-exitosas/)**

<br/>

> Estrutura do sistema:
> 
> - ***[1] Página inicial com informações sobre o projeto e um mapa dos Regionais***
> - ***[2] Página de cadastro***
>   - Dados pessoais
>     - Nome completo
>     - Número de registro no respectivo CRN
>     - CPF
>     - Estado onde realiza/realizou o trabalho
>     - Município onde realiza/realizou o trabalho
>     
>   - Cadastro de Trabalho
>     - Título do trabalho (até 70 caracteres)
>     - Área da nutrição para a qual se enquadra o trabalho (são 5 áreas)
>     - Relato/resumo do trabalho (1.700 caracteres)
>     - Fotos do trabalho (até cinco)
>     - Termo de responsabilidade (será elaborado pela UJ e deverá ser marcado como "aceito" pelo profissional)
>     
> - ***[3] Página de moderação***
>   - (header) Números de trabalhos cadastrados
>     - Total de trabalhos (cadastro)
>     - Total de fotos
>     - Total de Estados
>     - Total de Municípios
>     
>   - Aprovação ou rejeição de trabalhos postados
>   
> - ***[4] Página de resultados (para controle interno)***
>   - Função para exportar em PDF e XLSX

<br><p align="center">
  <img align="center" width="100%" height="" src="https://github.com/fmoraisbr/cfn-casos-exitosos/blob/main/notebook.jpg">
</p><br/>

### Implementação do mapa

~~~javascript
<div id="any-"></div>
<div style="max-width: 100%;">
  <div id="br_mine"></div>
</div>

<script src="assets/js/maparegionais.js"></script>

<script>
  BrMap.Draw({
    wrapper: '#br_mine',
    selectStates: ['sc'],
    callbacks: {
      click: (element, uf) => { alert(uf); },
    }
  });
</script>
~~~

<center><img src="https://github.com/fmoraisbr/cfn-casos-exitosos/blob/main/mapa.gif"></center>

<br><p align="center">
  <img align="center" width="100%" height="" src="https://github.com/fmoraisbr/cfn-casos-exitosos/blob/main/landing-experiencias-exitosas.png">
</p><br/>
