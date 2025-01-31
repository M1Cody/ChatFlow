<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\Fixer\Commenting;

use PhpCsFixer\FixerDefinition\FixerDefinition;
use PhpCsFixer\FixerDefinition\FixerDefinitionInterface;
use PhpCsFixer\Tokenizer\Token;
use PhpCsFixer\Tokenizer\Tokens;
use SplFileInfo;
use Symplify\CodingStandard\DocBlock\UselessDocBlockCleaner;
use Symplify\CodingStandard\Fixer\AbstractSymplifyFixer;
use Symplify\CodingStandard\TokenRunner\Traverser\TokenReverser;
use ECSPrefix202402\Symplify\RuleDocGenerator\Contract\DocumentedRuleInterface;
use ECSPrefix202402\Symplify\RuleDocGenerator\ValueObject\CodeSample\CodeSample;
use ECSPrefix202402\Symplify\RuleDocGenerator\ValueObject\RuleDefinition;
/**
 * @see \Symplify\CodingStandard\Tests\Fixer\Commenting\RemoveUselessDefaultCommentFixer\RemoveUselessDefaultCommentFixerTest
 */
final class RemoveUselessDefaultCommentFixer extends AbstractSymplifyFixer implements DocumentedRuleInterface
{
    /**
     * @readonly
     * @var \Symplify\CodingStandard\DocBlock\UselessDocBlockCleaner
     */
    private $uselessDocBlockCleaner;
    /**
     * @readonly
     * @var \Symplify\CodingStandard\TokenRunner\Traverser\TokenReverser
     */
    private $tokenReverser;
    /**
     * @var string
     */
    private const ERROR_MESSAGE = 'Remove useless PHPStorm-generated @todo comments, redundant "Class XY" or "gets service" comments etc.';
    public function __construct(UselessDocBlockCleaner $uselessDocBlockCleaner, TokenReverser $tokenReverser)
    {
        $this->uselessDocBlockCleaner = $uselessDocBlockCleaner;
        $this->tokenReverser = $tokenReverser;
    }
    public function getDefinition() : FixerDefinitionInterface
    {
        return new FixerDefinition(self::ERROR_MESSAGE, []);
    }
    /**
     * @param Tokens<Token> $tokens
     */
    public function isCandidate(Tokens $tokens) : bool
    {
        return $tokens->isAnyTokenKindsFound([\T_DOC_COMMENT, \T_COMMENT]);
    }
    public function getPriority() : int
    {
        /** must run before @see \PhpCsFixer\Fixer\Basic\BracesFixer to cleanup spaces */
        return 40;
    }
    /**
     * @param Tokens<Token> $tokens
     */
    public function fix(SplFileInfo $fileInfo, Tokens $tokens) : void
    {
        $reversedTokens = $this->tokenReverser->reverse($tokens);
        foreach ($reversedTokens as $index => $token) {
            if (!$token->isGivenKind([\T_DOC_COMMENT, \T_COMMENT])) {
                continue;
            }
            $cleanedDocContent = $this->uselessDocBlockCleaner->clearDocTokenContent($reversedTokens, $index, $token);
            if ($cleanedDocContent === '') {
                // remove token
                $tokens->clearTokenAndMergeSurroundingWhitespace($index);
            }
        }
    }
    public function getRuleDefinition() : RuleDefinition
    {
        return new RuleDefinition(self::ERROR_MESSAGE, [new CodeSample(<<<'CODE_SAMPLE'
/**
 * class SomeClass
 */
class SomeClass
{
    /**
     * SomeClass Constructor.
     */
    public function __construct()
    {
        // TODO: Change the autogenerated stub
        // TODO: Implement whatever() method.
    }
}
CODE_SAMPLE
, <<<'CODE_SAMPLE'
class SomeClass
{
    public function __construct()
    {
    }
}
CODE_SAMPLE
)]);
    }
}
