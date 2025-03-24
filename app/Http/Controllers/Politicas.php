<?php

namespace App\Http\Controllers;

use DateTime;
use Date;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Politicas extends Controller
{

    public function index(Request $request){

        return response('<!DOCTYPE html>
                         <html lang="pt-BR">
                         <head>
                             <meta charset="UTF-8">
                             <meta name="viewport" content="width=device-width, initial-scale=1.0">
                             <title>Política de Privacidade - Meu auxílio: Bolsa Família</title>
                             <style>
                                 body {
                                     font-family: Arial, sans-serif;
                                     background-color: #f4f4f4;
                                     color: #333;
                                     margin: 0;
                                     padding: 20px;
                                 }
                                 .container {
                                     max-width: 800px;
                                     margin: 0 auto;
                                     background-color: #fff;
                                     padding: 20px;
                                     border-radius: 8px;
                                     box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                                 }
                                 h1 {
                                     color: #007BFF;
                                     text-align: center;
                                 }
                                 h2 {
                                     color: #0056b3;
                                 }
                                 .highlight {
                                     color: #28a745;
                                     font-weight: bold;
                                 }
                                 .footer {
                                     text-align: center;
                                     margin-top: 20px;
                                     font-size: 0.9em;
                                     color: #666;
                                 }
                             </style>
                         </head>
                         <body>
                             <div class="container">
                                 <h1>Política de Privacidade</h1>
                                 <p><strong>Última atualização:</strong> <span class="highlight">25 de março de 2025</span></p>

                                 <p>Bem-vindo ao <span class="highlight">Meu auxílio: Bolsa Família</span> ("nós", "nosso", "aplicativo"). Esta Política de Privacidade explica como coletamos, usamos, compartilhamos e protegemos as informações dos usuários ("você") ao utilizar nosso aplicativo disponível no Google Play.</p>

                                 <p>Ao usar o <span class="highlight">Meu auxílio: Bolsa Família</span>, você concorda com a coleta e uso de informações de acordo com esta política. Se você não concordar com os termos desta política, por favor, não use nosso aplicativo.</p>

                                 <h2>1. Informações Coletadas</h2>
                                 <h3>1.1. Informações fornecidas por você</h3>
                                 <ul>
                                     <li><strong>Informações de registro:</strong> Se você criar uma conta no nosso aplicativo, podemos coletar informações como nome, endereço de e-mail e senha.</li>
                                     <li><strong>Informações de perfil:</strong> Podemos coletar informações que você optar por fornecer, como foto de perfil, preferências e outras informações pessoais.</li>
                                 </ul>

                                 <h3>1.2. Informações coletadas automaticamente</h3>
                                 <ul>
                                     <li><strong>Dados de uso:</strong> Coletamos informações sobre como você interage com o aplicativo, como páginas visitadas, tempo de uso e ações realizadas.</li>
                                     <li><strong>Dados de dispositivo:</strong> Podemos coletar informações sobre o dispositivo que você usa para acessar o aplicativo, incluindo modelo, sistema operacional, identificadores únicos (como Advertising ID) e endereço IP.</li>
                                     <li><strong>Dados de localização:</strong> Com sua permissão, podemos coletar informações sobre sua localização geográfica.</li>
                                 </ul>

                                 <h3>1.3. Informações coletadas por terceiros</h3>
                                 <ul>
                                     <li><strong>Google Analytics:</strong> Usamos o Google Analytics para coletar dados sobre o uso do aplicativo, como frequência de uso, eventos e padrões de navegação. Esses dados nos ajudam a melhorar a experiência do usuário.</li>
                                     <li><strong>Google AdMob:</strong> O Google AdMob coleta dados para exibir anúncios personalizados. Isso pode incluir o Advertising ID do dispositivo e informações sobre interações com anúncios.</li>
                                     <li><strong>Clarity:</strong> Usamos o Clarity para analisar o comportamento do usuário no aplicativo, como cliques, movimentos do mouse (em dispositivos compatíveis) e interações com a interface. Esses dados nos ajudam a entender como os usuários utilizam o aplicativo.</li>
                                 </ul>

                                 <h2>2. Como Usamos as Informações</h2>
                                 <p>Usamos as informações coletadas para:</p>
                                 <ul>
                                     <li>Fornecer, operar e manter nosso aplicativo.</li>
                                     <li>Melhorar, personalizar e expandir a funcionalidade do aplicativo.</li>
                                     <li>Entender e analisar como você usa nosso aplicativo.</li>
                                     <li>Desenvolver novos produtos, serviços, funcionalidades e funcionalidades.</li>
                                     <li>Exibir anúncios personalizados por meio do Google AdMob.</li>
                                     <li>Comunicar-nos com você, diretamente ou por meio de nossos parceiros, para atendimento ao cliente, atualizações e outras informações relacionadas ao aplicativo.</li>
                                     <li>Enviar e-mails, notificações e outras comunicações promocionais.</li>
                                     <li>Encontrar e prevenir fraudes.</li>
                                 </ul>

                                 <h2>3. Compartilhamento de Informações</h2>
                                 <p>Podemos compartilhar suas informações nas seguintes situações:</p>
                                 <ul>
                                     <li><strong>Com provedores de serviços:</strong> Compartilhamos informações com terceiros que prestam serviços em nosso nome, como análise de dados, hospedagem, marketing e publicidade.</li>
                                     <li><strong>Com autoridades legais:</strong> Podemos divulgar informações se exigido por lei ou em resposta a solicitações legais.</li>
                                     <li><strong>Em caso de fusão ou aquisição:</strong> Se estivermos envolvidos em uma fusão, aquisição ou venda de ativos, suas informações podem ser transferidas.</li>
                                 </ul>

                                 <h2>4. Ferramentas de Terceiros</h2>
                                 <h3>4.1. Google Analytics</h3>
                                 <p>O Google Analytics coleta dados sobre o uso do aplicativo para nos ajudar a entender o comportamento dos usuários. Esses dados são anônimos e não identificam pessoalmente os usuários. Para mais informações, consulte a <a href="https://policies.google.com/privacy" target="_blank">Política de Privacidade do Google Analytics</a>.</p>

                                 <h3>4.2. Google AdMob</h3>
                                 <p>O Google AdMob usa o Advertising ID do dispositivo para exibir anúncios personalizados. Você pode optar por não receber anúncios personalizados nas configurações do seu dispositivo. Para mais informações, consulte a <a href="https://support.google.com/admob/answer/6128543" target="_blank">Política de Privacidade do Google AdMob</a>.</p>

                                 <h3>4.3. Clarity</h3>
                                 <p>O Clarity coleta dados sobre interações do usuário para nos ajudar a melhorar a usabilidade do aplicativo. Esses dados podem incluir cliques, movimentos do mouse e outras interações. Para mais informações, consulte a <a href="https://learn.microsoft.com/en-us/clarity/faq" target="_blank">Política de Privacidade da Clarity</a>.</p>

                                 <h2>5. Segurança das Informações</h2>
                                 <p>Tomamos medidas razoáveis para proteger suas informações contra acesso não autorizado, alteração, divulgação ou destruição. No entanto, nenhum método de transmissão pela Internet ou armazenamento eletrônico é 100% seguro.</p>

                                 <h2>6. Seus Direitos</h2>
                                 <p>Você tem o direito de:</p>
                                 <ul>
                                     <li>Acessar, corrigir ou excluir suas informações pessoais.</li>
                                     <li>Optar por não receber comunicações promocionais.</li>
                                     <li>Revogar permissões concedidas ao aplicativo, como acesso à localização.</li>
                                     <li>Solicitar a exclusão de sua conta e dados associados.</li>
                                 </ul>
                                 <p>Para exercer esses direitos, entre em contato conosco pelo e-mail: <a href="mailto:seu-email@dominio.com">seu-email@dominio.com</a>.</p>

                                 <h2>7. Alterações nesta Política de Privacidade</h2>
                                 <p>Podemos atualizar esta Política de Privacidade periodicamente. Recomendamos que você revise esta página regularmente para se manter informado sobre quaisquer alterações. Alterações entram em vigor imediatamente após serem publicadas nesta página.</p>

                                 <h2>8. Contato</h2>
                                 <p>Se você tiver dúvidas ou preocupações sobre esta Política de Privacidade, entre em contato conosco pelo e-mail: <a href="mailto:seu-email@dominio.com">seu-email@dominio.com</a>.</p>

                                 <div class="footer">
                                     <p>&copy; 2025 <span class="highlight">Meu auxílio: Bolsa Família</span>. Todos os direitos reservados.</p>
                                 </div>
                             </div>
                         </body>
                         </html>');
    }

}
