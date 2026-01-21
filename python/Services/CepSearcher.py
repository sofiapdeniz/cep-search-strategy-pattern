from Contracts.CepProviderInterface import CepProviderInterface


class CepSearcher:
    def __init__(self, strategy: CepProviderInterface = None):
        self._strategy = strategy

    def set_strategy(self, strategy: CepProviderInterface):
        self._strategy = strategy

    def execute_search(self, cep: str) -> dict:
        if not self._strategy:
            raise Exception("strategy not defined.")
        return self._strategy.search(cep)
