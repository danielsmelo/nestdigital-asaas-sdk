Nest Digital - Asaas
====================

**Observação**

Esse pacote existe devido à necessidade de integração de um projeto de terceiro com o Asaas. Não existe nenhum vínculo do desenvolvedor desta SDK com a empresa Asaas.

**Notas da Versão 2**

Adicionado facade a instanciação da classe principal. A forma de instanciação mudou de:

```php
use Nestdigital\Asaas\Asaas

(new Asaas())->payment()->find()
```

Para:

```php
use Nestdigital\Asaas\Facade\Asaas

Asaas::payment()->find()
```

**SDK para uso em projetos Laravel da Nest Digital**

Esse pacote permite chamadas na API da asaas de forma simplificada, encapsulando os processos de conexão e tratamento de dados. As função disponibilizadas estão de acordo com a nomenclatura da [API](https://asaasv3.docs.apiary.io/) disponibilizada pelo serviço.

*Essa documentção apresenta detalhes sobre a implementação, para detalhes de requisição e formatação de dados consulte a [documentação interativa de requisições](https://asaasv3.docs.apiary.io/) disponibilizada pelo Asaas.*

---

## Recursos

 * Encapsulamento da requisição.
 * Tratamento de erros de conexão.
 * Tratamento de tipo de dados (não implementado).
 * Conversão de documentos para envio através de multipart/form-data (não implementado).
 * Testes unitários (incompletos, sem verificação de formato de resposta).

## Dependências

 * PHP 7.1 ou maior.
 * Illuminate/config 8.0 ou maior.
 * GuzzleHttp/Guzzle 7.4 ou maior.
### Recomendações - Dev

 * Manter a cobertura de testes unitários em 100% para refatoração segura.
 * Usar da rota de testes disponibilizada pela API do Asaas (https://private-anon-d1f6145713-asaasv3.apiary-mock.com/api/v3/).

## Instalação

### Instalação com importação direta de repositório privado

Para instalar o pacote é necessário informar, no composer.json, o repositório privado ou publico no qual o projeto foi disponibilizado.

```json
"repositories": {
    "nestdigital/asaas" : {
        "type" : "vcs",
        "url" : "https://github.com/danielsmelo/nestdigital-asaas.git"
    }
}
```

Informe também a dependência na tag require.

```json
"require": {
    "nestdigital/asaas": "1.0^",
}
```
## Como Usar

Para gerar o arquivo de configuração asaas.php automaticamente use o comando do artisan.

```bash
php artisan vendor:publish
```

Instancie a classe Asaas do pacote e chame cada função de forma encadeada. As funções estão definidas no final deste documento.

```php
// Referencie o namespace do pacote
use NestDigital\Asaas;

// Instancie uma novo objeto Asaas
$asaas = new Asaas();

//Faça as chamadas em funções encadeadas dependendo do serviço da API
$asaas->client()->create($data);
$assas->invoice()->find();

```

## Funções disponíveis

* Para modelo de dados checar documentação da API
### Payments:

```php

//Rota POST /payments
$assas->payment()->create(array $paymentData);

//Rota GET /payments/id ou /payments quando id é null
$assas->payment()->find(string $paymentId = null)

//Rota GET /payments?customer=
$assas->payment()->findByCustomerId(string $customerId)

//Rota POST /payments/id
$assas->payment()->update(string $paymentId, array $paymentData)

//Rota DELETE /payments/id
$assas->payment()->remove(string $paymentId)

//Rota POST /payments/id/restore
$assas->payment()->restore(string $paymentId)

//Rota POST /payments/id/restore
$assas->payment()->reversePayment(string $paymentId)

//Rota GET /payments/id/identificationField
$assas->payment()->bankSlipCode(string $paymentId)

//Rota GET /payments/id/pixQrCode
$assas->payment()->pixQrCode(string $paymentId)

//Rota POST /payments/id/receiveInCash
$assas->payment()->confirmReceivedInCash(string $paymentId)

//Rota POST /payments/id/undoReceivedInCash
$assas->payment()->undoReceivedInCash(string $paymentId)

```

### Customer

```php

//Rota POST /customers
$asaas->customer()->create(array $customerData)

//Rota GET /customers/id ou /customers
$asaas->customer()->find(string $customerId = null)

//Rota GET /customers?name=
$asaas->customer()->findByName(string $customerName)

//Rota GET /customers?email=
$asaas->customer()->findByEmail(string $customerEmail)

//Rota GET /customers?cpfCnpj=
$asaas->customer()->findByCpfCnpj(string $customerCpfCnpj)

//Rota POST customers/id
$asaas->customer()->update(string $customerId, array $values)

//Rota DELTE /customers/id
$asaas->customer()->remove(string $customerId)

//Rota POST /customers/id/restore
$asaas->customer()->restore(string $customerId)

```

### Installments

```php

//Rota GET /installments/id ou /installments
$asaas->installments()->find(string $installmentId = null)

//Rota DELETE /installments/id
$asaas->installments()->remove(string $installmentId)

//Rota POST /installments/id/refund
$asaas->installments()->reversePayment(string $installmentId)

```

### Subscription

```php

//Rota POST /subscriptions
$asaas->subscription()->create(array $subscriptionData)

//Rota GET /subscriptions/id ou subscriptions
$asaas->subscription()->find(string $subscriptionId = null)

//Rota GET /subscriptions?customer=
$asaas->subscription()->findByCustomerId(string $customerId)

//Rota GET /subscriptions/id/payments
$asaas->subscription()->payments(string $subscriptionId)

//Rota POST /subscriptions/id
$asaas->subscription()->update(string $subscriptionId, array $subscriptionData)

//Rota DELETE /subscriptions/id
$asaas->subscription()->remove(string $subscriptionId)

//Rota GET subscriptions/id/invoices
$asaas->subscription()->invoices(string $subscriptionId)

//Rota POST /subscriptions/id/invoiceSettings
$asaas->subscription()->setInvoiceSettings(string $subscriptionId, array $values)

//Rota GET subscriptions/id/invoiceSettings
$asaas->subscription()->invoiceSettings(string $subscriptionId)

//Rota DELETE /subscriptions/id/invoiceSettings
$asaas->subscription()->removeInvoiceSettings(string $subscriptionId)

```

### Payment Link

```php

//Rota POST /paymentLinks
$asaas->paymentLink()->create(array $paymentLinkData)

//Rota PUT /paymentLinks/id
$asaas->paymentLink()->update(string $paymentLinkId, array $paymentLinkData)

//Rota GET /paymentLinks/id ou /paymentLinks
$asaas->paymentLink()->find(string $paymentLinkId = null)

//Rota GET /paymentLinks?active=true
$asaas->paymentLink()->findActive()

//Rota DELETE /paymentLinks/id
$asaas->paymentLink()->remove(string $paymentLinkId)

//Rota POST /paymentLinks/id/restore
$asaas->paymentLink()->restore(string $paymentLinkId)

//Rota POST /paymentLinks/id/images
$asaas->paymentLink()->image(string $paymentLinkId)

//Rota GET /paymentLinks/id/images/imageId ou /paymentLinks/id/images
$asaas->paymentLink()->findImages(string $paymentLinkId, string $imageId = null)

//Rota DELETE paymentLinks/id/images
$asaas->paymentLink()->removeImage(string $imageId)

//Rota POST /paymentLinks/id/images/imageId/setAsMain
$asaas->paymentLink()->setMainImage(string $paymentLinkId, string $imageId)

```

### Notification

```php

//Rota GET /customers/id/notifications
$asaas->notification()->find(string $customerId)

//Rota POST /notifications/id
$asaas->notification()->update(string $notificationId, array $notificationConfig)

```

### Anticipation

```php

//Rota POST /anticipations
$asaas->anticipation()->create(array $anticipationData)

//Rota POST /anticipations/simulate
$asaas->anticipation()->simulate(array $simulateOptions)

//Rota GET /anticipations/id
$asaas->anticipation()->find(string $anticipationId)

//Rota GET /anticipations?payment=
$asaas->anticipation()->findByPaymentId(string $paymentId)

//Rota GET /anticipations?installment=
$asaas->anticipation()->findByInstallmentId(string $installmentId)

//Rota GET /anticipations?status=
$asaas->anticipation()->findByStatus(string $status)

```

### Payment Dunning

```php

//Rota POST /paymentDunnings
$asaas->paymentDunning()->create(array $paymentDunningData)

//Rota POST /paymentDunnings/simulate
$asaas->paymentDunning()->simulate(array $simulateOptions)

//Rota GET /paymentDunnings/id ou /paymentDunnings
$asaas->paymentDunning()->find(string $paymentDunningId = null)

//Rota GET /paymentDunnings?status=
$asaas->paymentDunning()->findByStatus(string $status)

//Rota GET /paymentDunnings?type=
$asaas->paymentDunning()->findByType(string $type)

//Rota GET /paymentDunnings?payment=
$asaas->paymentDunning()->findByPaymentId(string $paymentId)

//Rota GET /paymentDunnings/id/history
$asaas->paymentDunning()->eventHistory(string $paymentDunningId)

//Rota GET /paymentDunnings/id/partialPayments
$asaas->paymentDunning()->receivedPartialPayment(string $paymentDunningId)

//Rota GET /paymentDunnings/paymentsAvailableForDunning
$asaas->paymentDunning()->paymentsAvailableForDunning()

//Rota POST /paymentDunnings/id/documents
$asaas->paymentDunning()->resendDocuments(string $paymentDunningId, array $documentFiles)

//Rota POST /paymentDunnings/id/cancel
$asaas->paymentDunning()->cancel(string $paymentDunningId)

```

### Bill payment

```php

//Rota POST /bill
$asaas->billPayments()->create(array $billData)

//Rota POST /bill/simulate
$asaas->billPayments()->simulate(array $simulateOptions)

//Rota GET /bill/id ou /bill
$asaas->billPayments()->find(string $billId = null)

//Rota POST /bill/id/cancel
$asaas->billPayments()->cancel(string $billId)

```

### Serasa

```php

//Rota POST /creditBureauReport
$asaas->serasa()->check(array $customerData)

//Rota GET /creditBureauReport/id ou /creditBureauReport
$asaas->serasa()->find(string $checkId = null)

```

### Financial Transactions

```php

//Rota GET /financialTransactions
$asaas->financialTransaction()->find()

```

### Account

```php

//Rota POST /accounts
$asaas->account()->create(array $accountData)

//Rota GET /accounts
$asaas->account()->relatedAccounts()

//Rota GET /finance/getCurrentBalance
$asaas->account()->balance()

//Rota POST /transfers
$asaas->account()-> transfer(array $transferOptions)

//Rota GET /transfers/id ou /transfers
$asaas->account()->findTransfer(string $transferId = null)

//Rota GET /transfers?dateCreated=
$asaas->account()->findTransferByDate(string $transferDate)

//Rota GET /transfers?type=
$asaas->account()->findTransferByType(string $transferType)

//Rota GET /myAccount
$asaas->account()->comercialData()

//Rota POST /myAccount/paymentCheckoutConfig
$asaas->account()->setPaymentCheckoutConfig(array $paymentCheckoutData)

//Rota GET /myAccount/paymentCheckoutConfig
$asaas->account()->findPaymentCheckoutConfig()

```

### Invoice

```php

//Rota POST /invoices
$asaas->invoice()->create(array $invoiceData)

//Rota PUT /invoices/id
$asaas->invoice()->update(string $invoiceId, array $invoiceData)

//Rota GET /invoices/id ou /invoices
$asaas->invoice()->find(string $invoiceId = null)

//Rota GET /invoices?payment=
$asaas->invoice()->findByPaymentId(string $paymentId)

//Rota GET /invoices?installment=
$asaas->invoice()->findByInstallmentId(string $installmentId)

//Rota GET /invoices?status=
$asaas->invoice()->findByStatus(string $status)

//Rota POST /invoices/id/authorize
$asaas->invoice()->authorize(string $invoiceId)

//Rota POST /invoices/id/cancel
$asaas->invoice()->cancel(string $invoiceId)

//Rota GET /invoices/municipalServices?description=
$asaas->invoice()->municipalServices(string $description)

```

### Fiscal Information

```php

//Rota GET /ustomerFiscalInfo/municipalOptions
$asaas->fiscalInformation()->municipalServices()

//Rota POST /customerFiscalInfo
$asaas->fiscalInformation()->create(array $invoiceData)

//Rota POST /customerFiscalInfo
$asaas->fiscalInformation()->update(array $invoiceData)

//Rota GET /customerFiscalInfo
$asaas->fiscalInformation()->find()

```
### Webhook

```php

//Rota POST /webhook
$asaas->webhook()->config(array $webhookConfig)

//Rota GET /webhook
$asaas->webhook()->findConfig()

//Rota POST /webhook/invoice
$asaas->webhook()->invoiceConfig(array $invoiceConfig)

//Rota GET /webhook/invoice
$asaas->webhook()->findInvoiceConfig()

//Rota POST /webhook/transfer
$asaas->webhook()->transferConfig(array $transferConfig)

//Rota GET /webhook/transfer
$asaas->webhook()->findTransferConfig()

```
